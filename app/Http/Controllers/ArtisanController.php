<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtisanRequest;

class ArtisanController extends Controller
{
    //Cretion de la function de
    public function create(ArtisanRequest $request){

        dd($request->all());

    }
}
