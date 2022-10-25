<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Indicador;
use DB;

class ItemController extends Controller{

    public function index(){
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    public function create(){
        $indicadors = Indicador::all();
        return view('item.create', compact('item','indicadors'));
    }

    public function store(Request $request){
        Item::create($request->all());
        $name = $request->input('descripcion');

        return redirect()->route('item.index')->with(notify()->flash('Se registro el item:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));
    }

    public function update(Request $request){
        Item::find($request->codigo_item)->update($request->all());
        $name = $request->input('descripcion');

        return redirect()->route('item.index')->with(notify()->flash('Se actualizo el item:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));
    }

    public function destroy(Request $request){
        Item::find($request->codigo_item)->delete();
        $name = $request->input('codigo_item');
        return redirect()->route('item.index')->with(notify()->flash('Se elimino el item:', 'success', [
            'timer' => 3000,
            'text' => $name,
        ]));

    }
}

?>