<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\VillageOfficial;
use App\Models\Vision;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index() {
        $vision = Vision::with('mission')->first();
        $history = History::first();
        $villageOfficials = VillageOfficial::orderBy('order')->get();

        return view('history', [
            'vision' => $vision,
            'history' => $history,
            'villageOfficials' => $villageOfficials,
        ]);
    }
}
