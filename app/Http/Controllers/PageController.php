<?php

namespace App\Http\Controllers;

use App\Models\Puestovotacion;
use Facade\FlareClient\View;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function chart(){
        
        $grafico = Puestovotacion::all();

        $label  = $grafico->pluck('ciudad');
        $data = $grafico->pluck('cantidadpuesto');
        // return dump($label,$data);
        return View('Pages.chart_js',compact('label','data','grafico'));
    }
}
