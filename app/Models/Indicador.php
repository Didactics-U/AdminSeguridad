<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model{
    public $timestamps = false;
    protected $table = 'indicadores';
    protected $primaryKey = 'codigo_indicador';

    protected $fillable = [
        'codigo_indicador',
        'nombre_indicador',
        'codigo_modulo'
    ];
	
    public function modulo()
	{
		return $this->belongsTo('App\Models\Modulo', 'codigo_modulo');
	}
    public function item()
    {
        return $this->hasMany('App\Models\Item', 'cod_indicador');
    }
}
?>