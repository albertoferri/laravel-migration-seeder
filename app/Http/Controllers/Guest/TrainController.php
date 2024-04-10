<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // Recupera tutti i film dal database
        $Trains = Train::all();

        // Passa i film alla view
        return view('home', ['trains' => $Trains]);
    }
}