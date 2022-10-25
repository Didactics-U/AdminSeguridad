<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicador;
use App\Models\Modulo;
use DB;
class IndicadorController extends Controller{

    public function index(){
        $indicadors = Indicador::all();
        return view('indicador.index', compact('indicadors'));
    }

    public function create(){
        $modulos = Modulo::all();
        return view('indicador.create', compact('indicadors','modulos'));
    }

    public function store(Request $request){
        Indicador::create($request->all());
        $name = $request->input('nombre_indicador');

        return redirect()->route('indicador.index')->with(notify()->flash('Se registro el indicador:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));
    }

    public function update(Request $request){
        Indicador::find($request->codigo_indicador)->update($request->all());
        $name = $request->input('nombre_indicador');

        return redirect()->route('indicador.index')->with(notify()->flash('Se actualizo el indicador:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));
    }

    public function destroy(Request $request){
        Indicador::find($request->codigo_indicador)->delete();
        $name = $request->input('codigo');
        return redirect()->route('indicador.index')->with(notify()->flash('Se elimino el indicador:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));

    }
}

?>