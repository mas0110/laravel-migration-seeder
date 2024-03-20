<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){

        $trains = Train::where('departure_time', '>=', today() )->get();

        return view('pages.welcome', compact('trains'));
    }
}
