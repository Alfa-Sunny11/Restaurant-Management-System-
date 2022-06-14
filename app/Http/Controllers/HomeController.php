<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $data2 = foodchef::all();

        return view('home', compact("data","data2"));
    } 
    
    
    public function redirects(){

        $data = food::all();
        $data2 = foodchef::all();
        $userType = Auth::user()->usertype;

        if($userType == '1'){
            return view('admin.admin');
        }

        else{
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home', compact('data', 'data2', 'count'));
        }
    }

    // public function foodDisplay(){
    //     $data = food::all();

    //     return view('home', compact("data"));
    // }

    public function addCart(Request $req, $id){
        if(Auth::id()){
            $user_id = Auth::id();
            // dd($user_id);

            $food_id = $id;
            $quantity = $req->quantity;
            
            //cart table
            $cart = new cart;

            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }

    public function showCart(Request $req, $id){
        $count = cart::where('user_id', $id)->count();

        $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        return view('showCart', compact('count','data'));
    }
}
