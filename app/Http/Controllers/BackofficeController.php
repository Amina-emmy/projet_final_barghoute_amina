<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class BackofficeController extends Controller
{
    public function index(){
        $products=Product::all();
        $categories=Category::all();
        $users=User::where("name",'!=','admin')->get();
        $roles=Role::where("name",'!=','admin')->get();

        return view('backend.pages.backoffice',compact("users","products","roles","categories"));
    }
    //* Change user Role
    public function changeRole(Request $request, User $user){
        request()->validate([
            "role"=>"required"
        ]);
        $userRole=$user->roles->first();//get the role he has
        $user->removeRole($userRole); // remove it 
        $user->assignRole($request->role); //give him a new role

        return back()->with('success','User Role has been changed successfully');
    }
    //* Delete user 
    public function destroyUser(User $user){
        $user->delete();
        return back()->with('error','User has been DELETED successfully');;
    }
}
