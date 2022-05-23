<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::select(
            "trains.id",
            "trains.train_code",
            "SA.name as arrive_station",
            "SD.name as depart_station",
            "trains.arrive_time",
            "trains.depart_time",
            "state",
            "delay"
        )
            ->join("companies as C", "trains.company_id", "=", "C.id")
            ->join("stations as SA", "trains.arrive_station_id", "=", "SA.id")
            ->join("stations as SD", "trains.depart_station_id", "=", "SD.id")
            ->get();

        return view("index", compact("trains"));
    }
}
