<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
}
