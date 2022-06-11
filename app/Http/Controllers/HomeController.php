<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Food;
use App\Models\FoodChef;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $data2 = foodchef::all();

        return view('home', compact("data","data2"));
    } 
    
    
    public function redirects(){

        $data = food::all();
        $userType = Auth::user()->usertype;

        if($userType == '1'){
            return view('admin.admin');
        }

        else{
            return view('home', compact('data'));
        }
    }

    // public function foodDisplay(){
    //     $data = food::all();

    //     return view('home', compact("data"));
    // }
}
