<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class korisniciController extends Controller
{
    public function index(){
        if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
        {
            return view('noaccess');
        }
        else{
            $korisnici = DB::select('select * from korisnik');
    return view('uprkor',['korisnici'=>$korisnici]);
        }
    
    }
}
