<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use App\Models\Profile_info;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            $id = Auth::user()->id;
            $data = Profile_info::where('user_id',$id)->first();
          
            if($data !== null){
                return view('profile.edit',compact('data'));
            }
            else{
                return view('profile.home');
            }
             
         }
         else{
             return view('auth.login');           
         }   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        try {
                $credentials = $request->only('email','password');
                // $credentials['status'] = 1;
                if (Auth::attempt($credentials)) {
                    session()->put('type', Auth::user()->type);
                    session()->put('user_name', Auth::user()->name);
                    session()->put('user_mail', Auth::user()->email);
                    session()->put('user_id', Auth::user()->id);
                    return redirect()->route('home');
                }
                return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
            }
        catch (\Throwable $th){
            $message="Invalid Credentials or Account.";
            return redirect()->back()->withErrors($message);
        }
    }
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function register(Request $request)
    {
        $this->validate($request, [
            
            // 'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
        ]
    ); 
        $data = new User();
        $data->name = 1;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();

        $message = 'Registration has been added in this system.';
        return redirect()->route('home')->with('message', $message);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    public function store(Request $request)
    {   
        $id = Auth::user()->id;

        $this->validate($request, [
            
            'image' => 'required',
        ]
    ); 
       
        $data = new Profile_info();

        $data->full_name = $request->full_name;
        
        $data->class = $request->class;

        if($request->image !== null) 
        {
            $profile_picture = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();
 
            $pdf_path = $request->file('image')->move('app/user', $profile_picture);
            
            $profile_picture =  'user'.'/'.$profile_picture;
        }
        else {
            $profile_picture = "";
        }
 
        $data->image = $profile_picture;

        $data->user_id = $id;
        $data->goals = $request->goals;
        $data->height = $request->height;
        $data->weight = $request->weight;
        $data->dob = $request->dob;
        $data->address = $request->address;
        $data->phone_number = $request->phone_number;
        $data->email = $request->email;
        $data->parents = $request->parents;
        $data->h_school = $request->h_school;
        $data->gpa = $request->gpa;
        $data->act = $request->act;
        $data->major = $request->major;
        $data->achievements = $request->achievements;
        $data->club = $request->club;
        $data->joursey = $request->jersey;
        $data->position = $request->position;
        $data->c_achievements = $request->c_achievements;
        $data->footage = $request->footage;
        $data->h_contact = $request->h_contact;
        $data->additional_information = $request->additional_information;
        $data->save();

        $message = 'Profile Information has been Added in Your System.';

        return redirect()->route('home')->with('message', $message);
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Find the user by their id
        $id = $request->user_id;
        $user = Profile_info::where('user_id',$id)->first();
        if($user){
            $user->full_name = $request->full_name;
            $user->class = $request->class;
        if($request->image !== null) 
        {
            $profile_picture = date('YmdHis') . "_" . mt_rand(1, 999999) . "." . $request->file('image')->getClientOriginalExtension();
 
            $pdf_path = $request->file('image')->move('app/user', $profile_picture);
            
            $profile_picture =  'user'.'/'.$profile_picture;
        }
        else {
            $profile_picture = $request->image_previous;
        }
 
            $user->image = $profile_picture;
            $user->goals = $request->goals;
            $user->height = $request->height;
            $user->weight = $request->weight;
            $user->dob = $request->dob;
            $user->address = $request->address;
            $user->phone_number = $request->phone_number;
            $user->email = $request->email;
            $user->parents = $request->parents;
            $user->h_school = $request->h_school;
            $user->gpa = $request->gpa;
            $user->act = $request->act;
            $user->major = $request->major;
            $user->achievements = $request->achievements;
            $user->club = $request->club;
            $user->joursey = $request->jersey;
            $user->position = $request->position;
            $user->c_achievements = $request->c_achievements;
            $user->footage = $request->footage;
            $user->h_contact = $request->h_contact;
            $user->additional_information = $request->additional_information;
            $user->save();
        }
        $message = 'Profile Information Update Successfully';
        return redirect()->route('home')->with('message', $message);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
