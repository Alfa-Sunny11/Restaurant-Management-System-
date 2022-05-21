<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{
    public function users(){
        $data = user::all();
        return view('admin.users', compact('data'));
    }

    public function delete($id){
        $data = user::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function foodmenu(){
        return view("admin.foodmenu");
    }

    public function upload(Request $req){
        $data = new food;

        $img = $req->img;
        $imgname = time().'.'.$img->getClientOriginalExtension();
        $req->img->move('foodimage', $imgname);
        $data->img = $imgname;

        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;

        $data->save();

        return redirect()->back();
    }
}
