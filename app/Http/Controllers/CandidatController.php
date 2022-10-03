<?php

namespace App\Http\Controllers;

use App\Candidat;
use Illuminate\Http\Request;


class CandidatController extends Controller
{
    //getCandidat
    public function getCandidat(){
        $candidats=Candidat::all();
        return response()->json($candidats);
    }
}
