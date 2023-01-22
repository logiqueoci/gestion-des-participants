<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    //

    public function addParticipant()
    {
        return view('/participant/add');
    }

    public function saveParticipant(Request $request)
    {

        DB::table('participants')->insert([
            'nom'       =>  $request->nom,
            'prenom'    =>  $request->prenom,
            'numero'    =>  $request->numero,
            'email'     =>  $request->email
        ]);

        return back()->with('participant_add', 'Participant enregistré avec succès');
    }

    public function getAllParticipant()
    {
        $listParticipant = DB::table('participants')->get();
        return view('/participant/list', compact('listParticipant'));
    }
}
