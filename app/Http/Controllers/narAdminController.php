<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class narAdminController extends Controller
{
    
        public function index(){

                if(!Session::has('uloga') || Session::get('uloga') != 'Administrator')
	    {
		    return view('noaccess');
        }
        else{
                $username=Session::get('korisnickoIme');
               

                
               $korisnici1 =  DB::table('korisnik')
                ->join('narudzba', 'narudzba.idkorisnika', '=', 'korisnik.id')
                ->join('musterija', 'musterija.idkorisnika', '=', 'korisnik.id')
                ->join('jelo/pice', 'jelo/pice.idnarudzbe', '=', 'narudzba.id')
                ->select('narudzba.id AS id', 'musterija.adresa AS adresa', 'jelo/pice.naziv AS naziv', 'jelo/pice.kolicina AS kolicina')
                ->orderBy('narudzba.id', 'DESC')
                ->get();
    
                
    
                $grupaKorisnici1 = $korisnici1->groupBy('id');
               
                
           return view('narudzbeadmin',['grupaKorisnici1'=>$grupaKorisnici1]);}
        }
    
}
