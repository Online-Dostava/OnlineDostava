<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    function index(Request $req)
    {
        $username =$req->input('email1');
        $password =$req->input('lozinka1');

        $checkLogin=DB::table('korisnik')->where(['korisnickoime'=>$username, 'lozinka'=>$password])->get();
        
        if(count($checkLogin)>0)
        {
            $uloga=DB::table('korisnik')->where(['korisnickoime'=>$username, 'lozinka'=>$password, 'uloga' => 'Musterija'])->get();
            if(count($uloga)>0)
            {
                Session::put('uloga', 'Musterija');
                Session::put('korisnickoIme', $username);
                return redirect('indexkorisnik');
            }
            else
            {
                Session::put('uloga', 'Administrator');
                Session::put('korisnickoIme', $username);
                return redirect('admin');
            }
        }
        else
        {
            echo "<div style=' height: 10%; background-color:black; font-size: 4vw; text-align:center; width: 40%; margin-left:30%; margin-right:30%; margin-top:15%; color:white;'>Neuspješna prijava!</div><br><br>
            <form action='index'>
            <button style='margin-left:45%;'>Kliknite za povratak</button>
      </form>";
        }
    }
}
