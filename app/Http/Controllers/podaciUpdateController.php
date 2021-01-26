<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class podaciUpdateController extends Controller
{
    function index(Request $req)
    {
        $ime =$req->input('ime');
        $prezime=$req->input('prezime');
        $brojtel =$req->input('brojtel');
        $adresa=$req->input('adresa');
        $username=Session::get('korisnickoIme');
        
        
        DB::table('musterija')->join('korisnik', 'musterija.idkorisnika', '=', 'korisnik.id')->where('KorisnickoIme','=',[$username])->update(array(
        'ime'=>$ime,  'prezime'=>$prezime,  'brojtelefona'=>$brojtel,  'adresa'=>$adresa));
        return redirect('profil');
        
    }
}
