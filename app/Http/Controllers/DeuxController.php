<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeuxController extends Controller
{
    public function back () {
        //Tableau d'objets
        //En php un tableau s'ecrit []
        //En php un objet s'ecrit (object)[] et => se met entre la key et la value (Au lieu de : en JS)
        $backends=[
            //prem objet
            (object)[
                "nom"=>"Handy back",
                "fonction"=>"Backend dev",
                "photo"=>"salade.jpg"
            ],
            //deuxieme objet etc...
            (object)[
                "nom"=>"Hendeck back",
                "fonction"=>"Backend dev",
                "photo"=>"salade.jpg"
            ],
            (object)[
                "nom"=>"Harouf back",
                "fonction"=>"Backend dev",
                "photo"=>"salade.jpg"
            ],
            (object)[
                "nom"=>"Hancock back",
                "fonction"=>"Backend dev",
                "photo"=>"salade.jpg"
            ]
        ];
        return view('team.web.dev.backend',compact('backends'));
    }
}
