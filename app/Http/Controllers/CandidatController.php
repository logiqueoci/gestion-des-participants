<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatController extends Controller
{
    //
    public function addCandidat()
    {
        return view('/candidat/add');
    }

    public function saveCandidat(Request $request)
    {

        DB::table('candidats')->insert([
            'nom'       =>  $request->nom,
            'prenom'    =>  $request->prenom,
            'numero'    =>  $request->numero,
            'email'     =>  $request->email
        ]);

        return back()->with('candidat_add', 'Candidat enregistré avec succès');
    }

    public function getAllCandidat()
    {
        $listCandidats = DB::table('candidats')->get();
        return view('/candidat/list', compact('listCandidats'));
    }
}
