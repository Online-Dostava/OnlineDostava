<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class profilController extends Controller
{
    public function index(){
        
        if(!Session::has('uloga') || Session::get('uloga') != 'Musterija')
	    {
		    return view('noaccess');
        }
        else{
            $username=Session::get('korisnickoIme');
            $podaci = DB::table('musterija')->join('korisnik', 'musterija.idkorisnika', '=', 'korisnik.id')->where('korisnik.KorisnickoIme', '=', $username)->get();
            return view('profil',['podaci'=>$podaci]);
        }
        
      
    }
}
