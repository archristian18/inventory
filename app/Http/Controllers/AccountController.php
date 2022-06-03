<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('production.account');
    }
    public function histories()
    {
        return view('production.viewAccount');
    }


}
