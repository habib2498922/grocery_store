<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }

    public function saveBrandInfo(Request $request) {
        $this->validate($request, [
            'brand_name' => 'required|alpha',
            'brand_discription' => 'required',
        ]);

        return $request->all();
    }

    public function manageBrand(){
        $allCategoriesInfo = Category::all();
        return view('admin.category.manage-category',[
            'allCategoriesInfo'=>$allCategoriesInfo
        ]);
    }

}
