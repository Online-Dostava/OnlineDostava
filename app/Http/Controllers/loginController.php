<?php

namespace App\Http\Controllers;
use Session;
use Hash;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    function index(Request $req)
    {
        $username =$req->input('email1');
        $password =$req->input('lozinka1');

        $checkLogin=DB::table('korisnik')->where(['korisnickoime'=>$username])->get();
        
        
        if(count($checkLogin)>0)
        {
            foreach($checkLogin as $korisnik)
            if(Hash::check($password, $korisnik->Lozinka)==1){
            $uloga=DB::table('korisnik')->where(['korisnickoime'=>$username, 'lozinka'=>$korisnik->Lozinka, 'uloga' => 'Musterija'])->get();
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
        }
        else
        {
            echo "<div style=' height: 10%; font-size: 4vw; text-align:center; width: 40%; margin-left:30%; margin-right:30%; margin-top:15%; color:black;'>Neuspješna prijava!</div><br><br>
            <form action='index'>
            <button style='margin-left:45%;'>Kliknite za povratak</button>
      </form>";
        }
    }
}
