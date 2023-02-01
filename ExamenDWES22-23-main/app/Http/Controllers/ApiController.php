<?php

namespace App\Http\Controllers;
use App\Models\Trip;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function mostrarviajes ($destino)
    {
        $viaje = Trip::all()->where('destino',$destino)->where('plazas', '1')->where('plazas', '2')->where('plazas', '3');
        return $viaje;
    }
}
