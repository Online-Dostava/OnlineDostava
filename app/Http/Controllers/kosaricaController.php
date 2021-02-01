<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class kosaricaController extends Controller
{
    public function index(){
        if(!Session::has('uloga'))
        {
            return view('noaccess');
        }
        else{
            $username=Session::get('korisnickoIme');
           

            $korisnici =  DB::table('narudzba')->join('korisnik', 'narudzba.idkorisnika', '=', 'korisnik.id')
            ->join('jelo/pice', 'jelo/pice.idnarudzbe', '=', 'narudzba.id')
            ->where('korisnik.KorisnickoIme', '=', $username)
            ->select('narudzba.id AS id', 'jelo/pice.naziv AS jelo', 'jelo/pice.kolicina AS jkolicina')
            ->orderBy('narudzba.id', 'DESC')
            ->get();

            

            $grupaKorisnici = $korisnici->groupBy('id');
           
        if(Session::get('uloga') != 'Administrator'){
            return view('kosarica',['grupaKorisnici'=>$grupaKorisnici]);
        }
        else{
            return view('kosaricaadmin',['grupaKorisnici'=>$grupaKorisnici]);
        }
        }
    
    }
    
}

