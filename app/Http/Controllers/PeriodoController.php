<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periodo;

class PeriodoController extends Controller
{
    
    public function index()
    {
        $periodos = Periodo::all();
        return view('periodo.index', compact('periodos'));
    }

   
    public function create()
    {
        return view('periodo.create');
    }

    
    public function store(Request $request)
    {
        Periodo::create($request->all());

        return redirect()->route('periodo.create')->with(notify()->flash('Se registro la fecha:', 'success', [
            'timer' => 3000,
            'text' => $request->input('fecha_inicio'),
        ]));
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
