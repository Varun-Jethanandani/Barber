<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $role = Role::where('user_id',$user->id)->first();
        $role_type_id = $role->role_type_id;
        $role_type = DB::table('role_types')->where('role_type_id',$role_type_id)->first();
        $user->role_type_name = $role_type->role_type_name;
        return view('dashboard')->with('user',$user);
    }
}
