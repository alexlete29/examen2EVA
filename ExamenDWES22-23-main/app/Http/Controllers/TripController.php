<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Carbon;

class TripController extends Controller
{
    public function mostrar()
    {
        $current_date = Carbon::today();
        $trip  = Trip::all()->where('fecha' > $current_date)->where('plazas' > 0);
        return view('viajesdisponibles')->with('viajes', $trip);
    }

    public function guardar(Request $request, $id)
    {
        $viaje = Trip::all()->where('trip_id',$id);
        $plazas = $viaje->plazas();
        if($request < $plazas)
        {
            $viaje->save();
        }
    }
}
