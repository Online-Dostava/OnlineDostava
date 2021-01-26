<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class logoutController extends Controller
{
    function index(){
        Session::flush();
        return redirect('index');
    }
}
