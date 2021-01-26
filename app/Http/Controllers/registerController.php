<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class registerController extends Controller
{
    function index(Request $req)
    {
        $username =$req->input('email');
        $password =$req->input('lozinka');
        $password2 =$req->input('lozinka2');

        $checkRegister=DB::table('korisnik')->where(['korisnickoime'=>$username])->get();
        if(count($checkRegister)!=1){
            if($password==$password2){
                DB::table('korisnik')->insert([
                    'KorisnickoIme' => $username,
                    'lozinka' => $password,
                    'uloga' => 'Musterija'
                ]);
                $musterije = DB::table('korisnik')->where('KorisnickoIme', '=', $username)->select('id')->get();
                    foreach($musterije as $musterija)
                DB::table('musterija')->insert([
                    'IDKorisnika' => $musterija->id,
                    'Ime' => '',
                    'Prezime' => '',
                    'Adresa' => '',
                    'BrojTelefona' => '',
                ]);

                return redirect('indexkorisnik');
            }
            else{
                echo "<div style=' height: 10%; background-color:black; font-size: 4vw; text-align:center; width: 50%; margin-left:25%; margin-right:25%; margin-top:15%; color:white;'>Lozinke se ne poklapaju!</div><br><br>
                <form action='index'>
                <button style='margin-left:45%;'>Kliknite za povratak</button>
          </form>";
            }
        }
        else{
            echo "<div style=' height: 10%; background-color:black; font-size: 4vw; text-align:center; width: 40%; margin-left:30%; margin-right:30%; margin-top:15%; color:white;'>E-Mail već postoji!</div><br><br>
            <form action='index'>
            <button style='margin-left:45%;'>Kliknite za povratak</button>
      </form>";
        }
    }
}
