<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $publishedcategories = Category::where('publication_status' , 1)->get();
        return view('admin.product.add-product',[
            'publishedcategories'=>$publishedcategories
        ]);
    }
    private function saveBasicProductInfo($request,$imageUrl=null){
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_discription = $request->product_discription;
        if($imageUrl){
            $product->product_image = $imageUrl;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    private function saveProductImage($productImage){
        $imageName = $productImage->getClientOriginalName();
        $directory = 'adminAssets/product_image/';
        $imageUrl = $directory.$imageName;
        $productImage->move($directory, $imageName);
        return $imageUrl;
    }
    public function saveProductInfo(Request $request){
        $productImage= $request->file('product_image');
        $imageUrl = $this->saveProductImage($productImage);
        $this->saveBasicProductInfo($request,$imageUrl);
        return redirect('/add-product')->with('message','Product Info Save Sccessfully');
    }
    public function manageProduct(){
        $allProductsInfo = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.id', 'products.product_name','products.product_code','products.product_price','products.publication_status','categories.category_name')
            ->get();
        return view('admin.product.manage-product',[
            'allProductsInfo'=>$allProductsInfo
        ]);
    }
    public function viewProductInfo($id){
        $ProductInfoById = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*','categories.category_name')
            ->where('products.id', $id )
            ->first();
        return view('admin.product.view-product',[
            'ProductInfoById'=>$ProductInfoById
        ]);
    }
    public function editProductInfo($id){
        $publishdeCategories = Category::where('publication_status','1')->get();
        $ProductById = Product::find($id);
        return view('admin.product.edit-product',[
            'publishdeCategories'=>$publishdeCategories,
            'ProductById'=>$ProductById
        ]);
    }
    private function updateProductBasicInfo($request, $imageUrl=null){
        $product = Product::find($request->product_id);
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_discription = $request->product_discription;
        if($imageUrl){
            $product->product_image = $imageUrl;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function updateProductInfo(Request $request){
        $productImage = $request->file('product_image');
        if($productImage){
            $product = Product::find($request->product_id);
            unlink($product->product_image);
            //$productImage= $request->file('product_image');
            $imageUrl = $this->saveProductImage($productImage);
            $this->updateProductBasicInfo($request,$imageUrl);
        }else{
            $this->updateProductBasicInfo($request);
        }
        return redirect('/manage-product')->with('message','product info update Sccessfully');
    }

    public function unpublishdeProductInfo($id){
        $productById = Product::find($id);
        $productById->publication_status = 0;
        $productById->save();
        return redirect('/manage-product');

    }
    public function publishdeProductInfo($id){
        $productById = Product::find($id);
        $productById->publication_status = 1;
        $productById->save();
        return redirect('/manage-product');
    }
    public function deleteproductinfo($id){
        $productById = Product::find($id);
        $productById->delete();
        return redirect('/manage-product');
    }

}
