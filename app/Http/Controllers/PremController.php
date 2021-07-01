<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremController extends Controller
{
    
    public function front () {
        //Tableau d'objets
        //En php un tableau s'ecrit []
        //En php un objet s'ecrit (object)[] et => se met entre la key et la value (Au lieu de : en JS)
        $frontends=[
            //prem objet
            (object)[
                "nom"=>"Handy front",
                "fonction"=>"Frontend dev",
                "photo"=>"salade.jpg"
            ],
            //deuxieme objet etc...
            (object)[
                "nom"=>"Hendeck front",
                "fonction"=>"Frontend dev",
                "photo"=>"salade.jpg"
            ],
            (object)[
                "nom"=>"Harouf front",
                "fonction"=>"Frontend dev",
                "photo"=>"salade.jpg"
            ],
            (object)[
                "nom"=>"Hancock front",
                "fonction"=>"Frontend dev",
                "photo"=>"salade.jpg"
            ],
            (object)[
                "nom"=>"Hmihay front",
                "fonction"=>"Backend dev",
                "photo"=>"salade.jpg"
            ],
        ];
        return view('team.web.dev.frontend',compact('frontends'));
    }

}
