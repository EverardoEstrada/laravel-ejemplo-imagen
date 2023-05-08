<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class DatosController extends Controller
{
    public function index()
    {
        $datos=Datos::all();
        return view('welcome')->with('datos',$datos);
    }

    public function store(Request $request)
    {
        $datos = new Datos;
        $datos->nombre=$request->nombre;
        $request->file('imagen')->storeAs('public',$request->nombre.'.'.$request->file('imagen')->getClientOriginalExtension());
        $datos->almacenamiento=$request->nombre.'.'.$request->file('imagen')->getClientOriginalExtension();
        $datos->save();
        return redirect('/');

    }
}
