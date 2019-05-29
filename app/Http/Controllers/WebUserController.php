<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\User;
use App\Role;

use App\Http\Resources\User as UserResource;
use DB;


class WebUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::orderBy('created_at', 'desc')->paginate(2);

        
        // Return collection of users as resource
        return UserResource::collection($users);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->isMethod('put') ? User::findOrFail($request->user_id) : new User;
        
        $user->id = $request->input('user_id');
        
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->dob = $request->input('dob');
        $user->mobile_no = $request->input('mobile_no');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->zipcode = $request->input('zipcode');
        $user->state = $request->input('state');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        
     
        // if article is saved then we display that saved article separately
        if($user->save()){
            $role = new Role;
            $role->user_id = $user->id;
            $role->role_type_id = 1;
    
            $role->save();
            return new UserResource($user);
        }

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = User::findOrFail($id);

        
        return new UserResource($user);
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // Return collection of articles as resource
        if($user->delete()){
            return new UserResource($user);
        }
    }

    // public function login(){
    //     return view('login');
    // }

    public function dashboard(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email',$email)->first();
        $hashedPassword = $user->password;
        
        if(Hash::check($password,$hashedPassword)){
            $role = Role::where('user_id',$user->id)->first();
            $role_type_id = $role->role_type_id;
            $role_type = DB::table('role_types')->where('role_type_id',$role_type_id)->first();

            $user->role_type_name = $role_type->role_type_name;
            // return view('dashboard')->with('user',$user);
            // return new UserResource($user,$role_type->role_type_name);
        }

    }
}
