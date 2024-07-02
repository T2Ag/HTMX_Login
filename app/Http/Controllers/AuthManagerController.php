<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManagerController extends Controller
{
    function login() {
        return view('login');
    }
}
