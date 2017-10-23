<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerSingup(){
        return view('frontEnd.customer.customer-singup');
    }
}
