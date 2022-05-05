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
        $today = date_create(today())
            // ->setTime(00,00,00)
            ->format('Y-m-d H:i:s');
        // date_time_set($today, 15, 20, 28);
        // $today->setDate(2022,05,06);
        // $today = $today->format('Y-m-d H:i:s');
        dd($today);
        $trains = Train::where('departure_timestamp','>=', $today)
            ->orderBy('departure_timestamp')
            ->get();
        // dd($trains);

        return view('TrainsList', compact('trains'));
    }
}
