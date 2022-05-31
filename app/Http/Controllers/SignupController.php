<?php

namespace App\Http\Controllers;

use App\Models\SignupModel;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup()
    {
        return view('signup');
    } 
}
