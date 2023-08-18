<?php

namespace App\Http\Controllers;

use App\Http\Requests\artisanRequest;

class ArtisanController extends Controller
{
    //Cretion de la function de
    public function create(artisanRequest $request){

        dd($request->all());

    }
}
