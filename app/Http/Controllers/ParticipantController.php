<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    //
    public function getAllParticipant()
    {
        $listParticipant = DB::table('participant')->get();
        return view('/participant/list', compact('listParticipant'));
    }
}
