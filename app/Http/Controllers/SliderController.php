<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider.add-slider');
    }
    public function saveSliderInfo(Request $request){
        $sliderImage= $request->file('slider_image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory = 'adminAssets/images/slider_image/';
        $imageUrl = $directory.$imageName;
        $sliderImage->move($directory, $imageName);
        $slider = new Slider();
        $slider->slider_image=$imageUrl;
        $slider->slider_text_one =$request->slider_text_one;
        $slider->slider_text_two =$request->slider_text_two;
        $slider->slider_text_three =$request->slider_text_three;
        $slider->publication_status =$request->publication_status;
        $slider->save();
        return redirect('/add-slider')->with('message','slider Info Save Sccessfully');
    }
    public function manageSlider(){
        $sliders= Slider::all();
        return view('admin.slider.manage-slider',[
            'sliders'=>$sliders
        ]);
    }
    public function editProductInfo($id){
        $slideInfoById = Slider::find($id);
        return view('admin.slider.edit-slider',[
            'slideInfoById'=>$slideInfoById
        ]);
    }
    public function updateProductInfo(Request $request){
        $slider= Slider::find($request->slider_id);
        $sliderImage = $request->file('slider_image');
        if ('$sliderImage') {
            unlink($slider->slider_image);
            $sliderImage = $request->file('slider_image');
            $imageName = $sliderImage->getClientOriginalName();
            $directory = 'adminAssets/images/slider_image/';
            $imageUrl = $directory . $imageName;
            $sliderImage->move($directory, $imageName);
            $slider->slider_image = $imageUrl;
            $slider->slider_text_one = $request->slider_text_one;
            $slider->slider_text_two = $request->slider_text_two;
            $slider->slider_text_three = $request->slider_text_three;
            $slider->publication_status = $request->publication_status;
            $slider->save();
        }else{
            $slider->slider_text_one = $request->slider_text_one;
            $slider->slider_text_two = $request->slider_text_two;
            $slider->slider_text_three = $request->slider_text_three;
            $slider->publication_status = $request->publication_status;
            $slider->save();
        }
        return redirect('/manage-slider')->with('message','slider Info Save Sccessfully');
    }
    public function unpublishedSlider($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 0;
        $sliderById->save();
        return redirect('/manage-slider');
    }
    public function publishedSlider($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 1;
        $sliderById->save();
        return redirect('/manage-slider');
    }
    public function deleteSlider($id){
        $sliderById = Slider::find($id);
        $sliderById->delete();
        return redirect('/manage-slider');
    }
}
