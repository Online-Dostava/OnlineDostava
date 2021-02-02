<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class kosaricaController extends Controller
{
    public function index(Request $req){
        if(!Session::has('uloga'))
        {
            return view('noaccess');
        }
        else{
            $username=Session::get('korisnickoIme');
            $id = $req->input('custId1');
            $id1 = $req->input('custId2');
           

           

            $korisnici =  DB::table('narudzba')->join('korisnik', 'narudzba.idkorisnika', '=', 'korisnik.id')
            ->join('jelo/pice', 'jelo/pice.idnarudzbe', '=', 'narudzba.id')
            ->where('korisnik.KorisnickoIme', '=', $username)
            ->select('narudzba.id AS id', 'jelo/pice.naziv AS jelo', 'jelo/pice.kolicina AS jkolicina', 'jelo/pice.cijena as cijena', DB::raw('SUM(cijena) AS sum') )
            ->groupBy('id', 'jelo', 'jkolicina', 'cijena')
            ->orderBy('id', 'DESC')
            ->get();
        

            $grupaKorisnici = $korisnici->groupBy('id');

        

            $suma = DB::table('narudzba')->join('korisnik', 'narudzba.idkorisnika', '=', 'korisnik.id')
            ->join('jelo/pice', 'jelo/pice.idnarudzbe', '=', 'narudzba.id')
            ->where('korisnik.KorisnickoIme', '=', $username)
            ->select('jelo/pice.idnarudzbe as id', DB::raw('SUM(cijena) AS sum'))
            ->groupBy('jelo/pice.idnarudzbe')
            ->orderBy('jelo/pice.idnarudzbe', 'DESC')
            ->get();
            
           
        if(Session::get('uloga') != 'Administrator'){
            return view('kosarica',['grupaKorisnici'=>$grupaKorisnici], ['suma'=>$suma]);
        }
        else{
            return view('kosaricaadmin',['grupaKorisnici'=>$grupaKorisnici] , ['suma'=>$suma]);
        }
        }
    
    }
    
}

