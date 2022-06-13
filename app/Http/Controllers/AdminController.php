<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\FoodChef;

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

        $data = food::all();
        return view("admin.foodmenu", compact("data"));
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

    public function deleteMenu($id){
        $data = food::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updateMenu($id){
        $data = food::find($id);

        return view("admin.updateMenu", compact("data"));
    }

    public function updateSubmitMenu(Request $req, $id){
        $data = food::find($id);

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

    public function reservation(Request $req){
        $data = new reservation;

        $data->name = $req->name;
        $data->email = $req->email;
        $data->phoneNo = $req->phone;
        $data->phoneNo = $req->phone;
        $data->guest = $req->guestNumber;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->message = $req->message;

        $data->save();

        return redirect()->back();
    }

    public function viewReservation(){
        $data = reservation::all();

        return view('admin.adminReservation', compact('data'));
    }

    public function viewChefs(){
        $data = foodchef::all();
        return view('admin.adminchef', compact('data'));
    }

    public function addchefs(Request $req){
        $data = new foodchef;

        $data->name = $req->name;
        $data->speciality = $req->speciality;

        $img = $req->img;
        $imgname = time().'.'.$img->getClientOriginalExtension();
        $req->img->move('chefimage', $imgname);
        $data->image = $imgname;


        $data->save();

        return redirect()->back();
    }

    public function updateChefs($id){
        $data = foodchef::find($id);

        return view("admin.updateChef", compact("data"));
    }

    public function updateChefSubmit(Request $req, $id){
        $data = foodchef::find($id);

        $img = $req->img;
        $imgname = time().'.'.$img->getClientOriginalExtension();
        $req->img->move('chefimage', $imgname);
        $data->image = $imgname;

        $data->name = $req->name;
        $data->speciality = $req->speciality;

        $data->save();

     //   return redirect()->back();
        return redirect('/viewChefs');
    }

    public function deleteChef($id){
        $data = foodchef::find($id);

        $data->delete();
        return redirect('/viewChefs');
    }
}
