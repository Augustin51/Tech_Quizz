<?php

namespace App\Http\Controllers;

use App\Models\ResultsHistory;

class ResultsHistoryControlleur
{
    public function index($userId) {
        $results = ResultsHistory::where('id_user', $userId)
            ->orderBy('date', 'desc')
            ->get();


        return view('resultsHistory', compact('results'));
    }
}
