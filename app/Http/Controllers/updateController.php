<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class updateController extends Controller
{
    function index(Request $req)
    {
        $id =$req->input('id1');
        $uloga=$req->input('uloga');
        $checkLogin=DB::table('korisnik')->where('ID', '=', $id)->get();
        if(count($checkLogin)>0){
            DB::table('korisnik')->where('ID','=',[$id])->update(array(
                'uloga'=>$uloga));
        return redirect('uprkor');
        }
        else{
            echo "<div style=' height: 10%; background-color:black; font-size: 4vw; text-align:center; width: 40%; margin-left:30%; margin-right:30%; margin-top:15%; color:white;'>ID ne postoji!</div><br><br>
            <form action='uprkor'>
            <button style='margin-left:45%;'>Kliknite za povratak</button>
      </form>";
        }
    }
}
