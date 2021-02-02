<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class narAdminController extends Controller
{
    
        public function index(Request $req){

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
                ->select('narudzba.id AS id', 'musterija.adresa AS adresa', 'jelo/pice.naziv AS naziv', 'jelo/pice.kolicina AS kolicina', 'jelo/pice.cijena AS cijena')
                ->orderBy('id', 'DESC')
                ->get();
    
                $suma1 = DB::table('narudzba')->join('korisnik', 'narudzba.idkorisnika', '=', 'korisnik.id')
                ->join('jelo/pice', 'jelo/pice.idnarudzbe', '=', 'narudzba.id')
                ->select('jelo/pice.idnarudzbe as id', DB::raw('SUM(cijena) AS sum'))
                ->groupBy('jelo/pice.idnarudzbe')
                ->orderBy('jelo/pice.idnarudzbe', 'DESC')
                ->get();
                
    
                $grupaKorisnici1 = $korisnici1->groupBy('id');
               
                
           return view('narudzbeadmin',['grupaKorisnici1'=>$grupaKorisnici1], ['suma1'=>$suma1]);}
        }
    
}
