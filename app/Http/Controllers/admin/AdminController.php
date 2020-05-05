<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Session;
class AdminController extends Controller
{
    
    public function registered_admin()
    {
        $users=User::all();
        return view('backend.registereduser')->with(compact('users'));
    }

    public function edit_user($id)
    {
        $user=User::findOrFail($id);

        return view('backend.edit_registered_user')->with(compact('user'));
    }

    public function edit_user_put(Request $request,$id)
    {
        $user=User::find($id);
        $user->name=$request->input('name');
        $user->usertype=$request->input('usertype');
        $user->update();
        Session::flash('success', 'User Updated');
        return redirect('registered_user');
    }

    public function delete_user($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        Session::flash('error', 'Account deleted Successfylly');
        return redirect('registered_user');
    }
}
