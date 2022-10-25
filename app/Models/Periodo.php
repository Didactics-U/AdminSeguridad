<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public $timestamps = false;
    protected $table = 'periodo';
    protected $primaryKey = 'codigo_periodo';
    protected $fillable = [
        'codigo_periodo',
        'fecha_inicio',
        'fecha_fin'
    ];
	
 //    public function evaluacion()
	// {
	// 	return $this->hasMany('App\Models\Evaluacion', 'cod_periodo');
	// }
}
