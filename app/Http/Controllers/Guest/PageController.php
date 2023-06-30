<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trains;

class PageController extends Controller
{

    public function index() {
        //Recupero i links per l'header, dal file config/store
        // $links = config('store.someLinks');

        //Recupero i libri dal database
        $trains = Trains::orderBy('orario_di_partenza')->get();

        return view('welcome', compact("trains") );
    }


}
