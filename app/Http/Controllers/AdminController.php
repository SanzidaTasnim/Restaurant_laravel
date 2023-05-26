<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Menu;

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
}
