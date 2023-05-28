<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Chefs;
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
        $usertype = Auth::user()->usertype;
        if($usertype == 1)
        {
            return view('backend.home');
        }
        else
        {
            return view('frontend.home',compact('menu'));
        }
    }
}
