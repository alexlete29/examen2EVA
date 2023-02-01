<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    public function mostrar()
    {
        $drivers = Driver::all()->where('trip_id',!null);
        return view('admin')->with('drivers',$drivers);
    }
}
