<?php
namespace App\Http\Controllers;
use Session;


use Illuminate\Http\Request;
use DB;

class narudzbaController extends Controller
{
    function index(Request $req){

        $username = Session::get('korisnickoIme');

    $hamb = $req->input('inputhamb1');
    $kebab = $req->input('inputkebab1');
    $pizza = $req->input('inputpizza1');
    $cheesebuger = $req->input('inputcheeseburger1');
    $nuggets = $req->input('inputnuggets1');
    $wings = $req->input('inputwings1');
    $cola = $req->input('inputcola1');
    $fanta = $req->input('inputfanta1');
    $sprite = $req->input('inputsprite1');
    $cedevita = $req->input('inputcedevita1');

    $narudzbe = DB::table('korisnik')->where('KorisnickoIme', '=', $username)->select('id')->get();
    foreach($narudzbe as $narudzba)
    DB::table('narudzba')->insert([
        
        'IDKorisnika' => $narudzba->id
    ]);

    $IDNarudzbe =  DB::table('narudzba')->join('korisnik', 'narudzba.idkorisnika', '=', 'korisnik.id')->where('korisnik.KorisnickoIme', '=', $username)->select('narudzba.id')->orderBy('id', 'DESC')->first();

    foreach($IDNarudzbe as $IDNarudzba)
        
    if($hamb>0){
        $cijena = $hamb * 4;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Hamburger',
            'cijena' => $cijena,
            'kolicina' => $hamb,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($kebab>0){
        $cijena = $kebab * 5;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Kebab',
            'cijena' => $cijena,
            'kolicina' => $kebab,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($pizza>0){
        $cijena = $pizza * 10;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Pizza',
            'cijena' => $cijena,
            'kolicina' => $pizza,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($cheesebuger>0){
        $cijena = $cheesebuger * 5;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Cheesebuger',
            'cijena' => $cijena,
            'kolicina' => $cheesebuger,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($nuggets>0){
        $cijena = $nuggets * 6;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Nuggets',
            'cijena' => $cijena,
            'kolicina' => $nuggets,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }


    if($wings>0){
        $cijena = $wings * 5;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Wings',
            'cijena' => $cijena,
            'kolicina' => $wings,
            'IDNarudzbe' =>$IDNarudzbe->id
        ]);
    }

    if($cola>0){
        $cijena = $cola * 2;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Cola',
            'cijena' => $cijena,
            'kolicina' => $cola,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($fanta>0){
        $cijena = $fanta * 2;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Fanta',
            'cijena' => $cijena,
            'kolicina' => $fanta,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($sprite>0){
        $cijena = $sprite * 2;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Sprite',
            'cijena' => $cijena,
            'kolicina' => $sprite,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }

    if($cedevita>0){
        $cijena = $cedevita * 1.5;
        DB::table('jelo/pice')->insert([
            'naziv' => 'Cedevita',
            'cijena' => $cedevita,
            'kolicina' => $cedevita,
            'IDNarudzbe' => $IDNarudzbe->id
        ]);
    }
    return redirect("kosarica");
    }
}
