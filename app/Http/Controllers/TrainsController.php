<?php

namespace App\Http\Controllers;

use App\trains;
use Illuminate\Http\Request;
use App\Train;

class TrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = Train::where('departure_timestamp', '>=', time());

        return view('TrainList', compact('trains'));
    }
}
