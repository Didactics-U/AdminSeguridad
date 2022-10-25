<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModuloController extends Controller{

    public function index(){
        $modulos = Modulo::all();

        return view('modulo.index', compact('modulos'));
    }

    public function create(){
        return view('modulo.create');
    }

    public function store(Request $request){
        Modulo::create($request->all());
        $name = $request->input('nombre');

        return redirect()->route('modulo.index')->with(notify()->flash('Se registro el modulo:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));
    }

    public function update(Request $request){
        Modulo::find($request->codigo)->update($request->all());
        $name = $request->input('nombre');

        return redirect()->route('modulo.index')->with(notify()->flash('Se actualizo el modulo:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));
    }

    public function destroy(Request $request){
        Modulo::find($request->codigo)->delete();
        $name = $request->input('codigo');
        return redirect()->route('modulo.index')->with(notify()->flash('Se elimino el modulo:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));

    }
}

?>