<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluacion;
use App\Models\Item;
use App\Models\Periodo;
use DB;

class EvaluacionController extends Controller{

    public function index(){
        $evaluaciones = Evaluacion::all();
        return view('evaluacion.index', compact('evaluaciones'));
    }
    
    public function create(){
        $periodos = Periodo::all();
        $items = Item::all();
        return view('evaluacion.create', compact('evaluacion','periodos','items'));
    }

    public function store(Request $request){
        
        $datos = array();

        $datos['cod_periodo'] = $request->input('codigo_periodo');

        $valor  = $request->input('valor');
        $coditem = $request->input('cod_item');
        $observacion  = $request->input('observacion');

       for($i=0 ; $i<count($valor) ; $i++){
         $datos['cod_item'] = $coditem[$i];
        $datos['valor'] = $valor[$i];
        $datos['observacion'] = $observacion[$i];

        $evaluacion = Evaluacion::create($datos);
            
        
        }
        return redirect()->route('evaluacion.create')->with(notify()->flash('Se registro el evaluacion', 'success', [
            'timer' => 3000,
            
        ]));
    }

    public function update(Request $request){
        // Item::find($request->codigo_item)->update($request->all());
        // $name = $request->input('descripcion');

        // return redirect()->route('item.index')->with(notify()->flash('Se actualizo el item:', 'success', [
        //     'timer' => 3000,
        //     'text' => $name,
        // ]));
    }

    public function destroy(Request $request){
        // Item::find($request->codigo_item)->delete();
        // $name = $request->input('codigo_item');
        // return redirect()->route('item.index')->with(notify()->flash('Se elimino el item:', 'success', [
        //     'timer' => 3000,
        //     'text' => $name,
        // ]));

    }
}

