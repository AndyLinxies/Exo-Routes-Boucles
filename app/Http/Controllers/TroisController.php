<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TroisController extends Controller
{
    public function index () {
        //Reutilisation des deux variables pour les utiliser dans le welcome
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
        return view('welcome',compact('frontends','backends'));
    }

    public function servApVente() {
        return view('infos.contact.sav');
    }

    public function partena () {
        return view('infos.contact.partenariat');
    }

    public function partenariaz () {
        return view('infos.contact.info');
    }
}
