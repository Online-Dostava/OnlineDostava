<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;
use DB;

class izvrsiNarController extends Controller
{
    function index(Request $req){
        $id = $req->input('custId3');
        
        DB::table('jelo/pice')->join('narudzba', 'jelo/pice.idnarudzbe', '=', 'narudzba.id')->where('jelo/pice.idnarudzbe', '=', $id)->delete();
        DB::table('narudzba')->where('ID', '=', $id)->delete();

        return redirect('/narudzbeadmin');
    }
}
