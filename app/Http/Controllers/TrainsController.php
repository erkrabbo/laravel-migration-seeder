<?php

namespace App\Http\Controllers;

use App\Train;

class TrainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $today = date_create(today())
            ->format('Y-m-d');
        $trains = Train::whereDate('departure_timestamp','>=', $today)
            ->orderBy('departure_timestamp')
            ->paginate(20);

        return view('TrainsList', compact('trains'));
    }
}
