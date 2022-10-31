<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

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
                    "szul"=>"required|date|max:".(date("Y")),

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
                    "szul.max" =>"A mai dátumnál nem lehet nagyobb"
                ]
            );
   }

}
