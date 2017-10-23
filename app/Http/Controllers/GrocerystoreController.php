<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrocerystoreController extends Controller
{
    public function homeContent(){
        return view('frontEnd.home.home-content');
    }
    public function eventContent(){
        return view('frontEnd.event.event-content');
    }
    public function aboutUsContent(){
        return view('frontEnd.about.about-content');
    }
    public function productContent(){
        return view('frontEnd.bestDeal.bestDeal-content');
    }
    public function serviceContent(){
        return view('frontEnd.service.service-content');
    }
    public function householdContent(){
        return view('frontEnd.household.household-content');
    }
    public function vegetableContent(){
        return view('frontEnd.vegetable.vegetable-content');
    }
    public function kitchenContent(){
        return view('frontEnd.kitchen.kitchen-content');
    }
    public function softDrinkContent(){
        return view('frontEnd.softDrink.softDrink-content');
    }
    public function petFoodContent(){
        return view('frontEnd.petFood.petFood-content');
    }
    public function frozenSnackContent(){
        return view('frontEnd.frozenSnack.frozenSnack-content');
    }
    public function breadBakeryContent(){
        return view('frontEnd.breadBakery.breadBakery-content');
    }
    public function contactUsContent(){
        return view('frontEnd.contactUs.contactUs-content');
    }
}
