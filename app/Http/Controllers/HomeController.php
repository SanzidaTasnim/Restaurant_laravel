<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Chefs;
use App\Models\Cart;
class HomeController extends Controller
{
    public function index()
    {
        $menu = menu::all();
        $chefs = chefs::all();
        return view('frontend.home',compact('menu','chefs'));
    }
    public function redirect()
    {
        $menu = menu::all();
        $chefs = chefs::all();
        $usertype = Auth::user()->usertype;
        if($usertype == 1)
        {
            return view('backend.home');
        }
        else
        {
            $user_id = Auth::user()->id;
            $count = cart::where('user_id', $user_id)->count();
            return view('frontend.home',compact('menu','chefs','count'));
        }
    }
    public function addCart(Request $request,$id)
    {
        if(Auth::id())
        {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->food_id = $id;
            $cart->quantity = $request->quantity;

            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
}
