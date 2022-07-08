<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
use Illuminate\Support\Facades\Auth;


class RegistrationController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registrations',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        return redirect("registration")->withSuccess('You have signed-in');

    }

    public function create(array $data)
    {
      registration::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password']
        // 'password' => Hash::make($data['password'])
      ]);
    
    }    
    
    public function data()
    {
        // if(Auth::check()){
        //     return redirect('/');
        // }
  
        return redirect("/login")->withSuccess('You are not allowed to access');
    }



}
