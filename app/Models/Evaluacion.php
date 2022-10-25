<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    public $timestamps = false;
    protected $table = 'evaluacion';
    protected $primaryKey = 'codigo_evaluacion';
    protected $fillable = [
        'codigo_evaluacion',
        'valor',
        'cod_item',
        'cod_periodo',
        'observacion'
    ];
	
 //    public function periodo()
	// {
	// 	return $this->hasMany('App\Models\Periodo', 'cod_periodo');
	// }
}
