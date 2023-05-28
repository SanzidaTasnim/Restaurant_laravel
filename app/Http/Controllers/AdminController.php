<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Chefs;


class AdminController extends Controller
{
    public function users()
    {
        $users = user::all();
        return view('backend.users',compact('users'));
    }

    public function deleteUsers($id)
    {
        $user = user::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function foodMenu()
    {
        return view('backend.foodMenu');
    }

    public function uploadFoodMenu(Request $request)
    {
        $menu = new Menu();
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imageName);
        $menu->title = $request->title;
        $menu->price = $request->price;
        $menu->content = $request->content;
        $menu->image = $imageName;

        $menu->save();
        return redirect()->back();
    }
    public function allMenu()
    {
        $menu = menu::all();
        return view('backend.allMenu',compact('menu'));
    }
    public function menu_delete($id)
    {
        $menu = menu::find($id);
        $menu->delete();

        return redirect()->back();
    }
    public function menu_update($id)
    {
        $data = menu::find($id);
        return view('backend.menu_update',compact('data'));
    }
    public function updated_menu(Request $request, $id)
    {
        $data = menu::find($id);
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imageName);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->price = $request->price;
        $data->image = $imageName;

        $data->save();
        return redirect()->back();
    }
    public function view_reservation(Request $request)
    {
        $data = new reservation();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->guest = $request->guest;
        $data->message = $request->message;

        $data->save();
        return redirect()->back();
    }
    public function reservation()
    {
        $data = reservation::all();
        return view('backend.reservation',compact('data'));
    }
    public function add_chefs()
    {
        return view('backend.add_chefs');
    }
    public function uploadChefs(Request $request)
    {
        $chefs = new chefs();
        $chefs->name = $request->name;
        $chefs->specialist = $request->specialist;

        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefImage', $imageName);

        $chefs->image = $imageName;

        $chefs->save();
        return redirect()->back();
    }
}
