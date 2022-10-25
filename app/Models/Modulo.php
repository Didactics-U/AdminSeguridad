<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model{
    public $timestamps = false;
    protected $table = 'modulo';
    protected $primaryKey = 'codigo';
    protected $fillable = [
        'codigo',
        'nombre'
    ];
	
    public function indicador()
	{
		return $this->hasMany('App\Models\Indicador', 'codigo_modulo');
	}
}
?>