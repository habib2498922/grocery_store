<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        $allCategoriesInfo = Category::all();
        return view('admin.category.manage-category',[
            'allCategoriesInfo'=>$allCategoriesInfo
        ]);
    }
    public function saveCategoryInfo(Request $request){
        $category = new Category();
        if ('category_discription'){
            $category->category_name = $request->category_name;
            $category->category_discription = $request->category_discription;
            $category->publication_status = $request->publication_status;
            $category->save();
        }else{
            $category->category_name = $request->category_name;
            $category->publication_status = $request->publication_status;
            $category->save();
        }

        return redirect('/add-category')->with('message','Category Info Save Successfully');
    }
    public function editCategoryInfo($id){
        $categoryInfoById = Category::find($id);
        return view('admin.category.edit-category',[
            'categoryInfoById'=>$categoryInfoById
        ]);
    }
    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        if ('category_discription'){
            $category->category_name = $request->category_name;
            $category->category_discription = $request->category_discription;
            $category->publication_status = $request->publication_status;
            $category->save();
        }else{
            $category->category_name = $request->category_name;
            $category->publication_status = $request->publication_status;
            $category->save();
        }

        return redirect('/manage-category')->with('message','Category Info Update Successfully');
    }
    public function unpublishedCategoryInfo($id){
        $unpublishedCategoryInfoById= Category::find($id);
        $unpublishedCategoryInfoById->publication_status = 0;
        $unpublishedCategoryInfoById->save();
        return redirect('/manage-category')->with('message','Category Info Unpublished  Successfully');

    }public function publishedCategoryInfo($id){
        $publishedCategoryInfoById= Category::find($id);
        $publishedCategoryInfoById->publication_status = 1;
        $publishedCategoryInfoById->save();
        return redirect('/manage-category')->with('message','Category Info Published  Successfully');

    }

}
