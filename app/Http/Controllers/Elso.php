<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Support\Facades\DB;

class Elso extends Controller
{
   public function bekuldes(){

        return view('welcome');

   }

   public function rogzites(Request $req){
    $req->validate(
        [
            "vnev"=>"required|min:1|max:30",
            "knev"=>"required|min:1|max:30",
            "szul"=>"required|date"

        ],

        [
            "vnev.required"=>"A mezőt kötelező kitölteni!",
            "vnev.min"=> "Minimum 1 karakter!",
            "vnev.max"=> "maximum 30 karakter!",

            "knev.required"=>"A mezőt kötelező kitölteni!",
            "knev.min"=> "Minimum 1 karakter!",
            "knev.max"=> "maximum 30 karakter!",

            "szul.required" => "kötelező kitölteni a mezőt!",
            "szult.date" => "Csak dátum lehet!",
            
        ]);

        
        
        DB::insert("INSERT INTO adatok (Vezeteknev, Keresztnev, Szuletesi_ev) VALUES (?,?,?)",[$req->get('vnev')],[$req->get('knev')],[$req->get('szul')]);
        return redirect ("/")->with("kesz","Az adat felvitel sikeres");
   }

}
