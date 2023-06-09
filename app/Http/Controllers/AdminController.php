<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Chefs;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function users()
    {
        if(Auth::user()->usertype == 1)
        {
            $users = user::all();
            return view('backend.users',compact('users'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function deleteUsers($id)
    {
        if(Auth::user()->usertype == 1)
        {
            $user = user::find($id);
            $user->delete();

            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

    public function foodMenu()
    {
        if(Auth::user()->usertype == 1)
        {
            return view('backend.foodMenu');
        }
        else
        {
            return redirect('login');
        }
    }

    public function uploadFoodMenu(Request $request)
    {
        if(Auth::user()->usertype == 1)
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
        else
        {
            return redirect('login');
        }

    }
    public function allMenu()
    {
        if(Auth::user()->usertype == 1)
        {
            $menu = menu::all();
            return view('backend.allMenu',compact('menu'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function menu_delete($id)
    {
        if(Auth::user()->usertype == 1)
        {
            $menu = menu::find($id);
            $menu->delete();

            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
    public function menu_update($id)
    {
        if(Auth::user()->usertype == 1)
        {
            $data = menu::find($id);
            return view('backend.menu_update',compact('data'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function updated_menu(Request $request, $id)
    {
        if(Auth::user()->usertype == 1)
        {
            $data = menu::find($id);
            $image = $request->image;

            if($image)
            {
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('foodimage',$imageName);
                $data->image = $imageName;
            }

            $data->title = $request->title;
            $data->content = $request->content;
            $data->price = $request->price;

            $data->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
    public function view_reservation(Request $request)
    {
        if(Auth::user()->usertype == 1)
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
        else
        {
            return redirect('login');
        }

    }
    public function reservation()
    {
        if(Auth::id() && Auth::user()->usertype == 1)
        {
            $data = reservation::all();
            return view('backend.reservation',compact('data'));
        }
        else
        {
            return redirect('login');
        }

    }
    public function add_chefs()
    {
        if(Auth::user()->usertype == 1)
        {
            return view('backend.add_chefs');
        }
        else
        {
            return redirect('login');
        }
    }
    public function uploadChefs(Request $request)
    {
        if(Auth::user()->usertype == 1)
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
        else
        {
            return redirect('login');
        }
    }
    public function view_chefs()
    {
        if(Auth::user()->usertype == 1)
        {
            $chefs = chefs::all();
            return view('backend.view_chefs',compact('chefs'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function chef_delete($id)
    {
        if(Auth::user()->usertype == 1)
        {
            $chef = chefs::find($id);

            $chef->delete();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }

    }
    public function chef_update($id)
    {
        if(Auth::user()->usertype == 1)
        {
            $chef = chefs::find($id);
            return view('backend.updated_chef', compact('chef'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function updated_chefs(Request $request,$id)
    {
        if(Auth::user()->usertype == 1)
        {
            $chef = chefs::find($id);

            $image = $request->image;
            if($image)
            {
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('chefImage',$imageName);
                $chef->image = $imageName;
            }
            $chef->name = $request->name;
            $chef->specialist = $request->specialist;


            $chef->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }

    }
    public function orders()
    {
        if(Auth::user()->usertype == 1)
        {
            $orders = Order::all();
            return view('backend.orders',compact('orders'));
        }
        else
        {
            return redirect('login');
        }
    }
    public function search_order(Request $request)
    {
        if(Auth::user()->usertype == 1)
        {
            $search = $request->search;
            $orders = Order::where('name','LIKE', '%'.$search.'%')
                            ->orWhere('email', 'LIKE', '%'.$search.'%')
                            ->orWhere('phone', 'LIKE', '%'.$search.'%')
                            ->get();
            return view('backend.orders', compact('orders'));
        }
        else
        {
            return redirect('login');
        }
    }
}
