<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class profilAdminController extends Controller
{
    public function index(){

        if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	    {
		    return view('noaccess');
        }
        else{
             $username=Session::get('korisnickoIme');
             $podaci = DB::table('musterija')->join('korisnik', 'musterija.idkorisnika', '=', 'korisnik.id')->where('korisnik.KorisnickoIme', '=', $username)->get();
             return view('profiladmin',['podaci'=>$podaci]);
         }
        
    
    }
}
