<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model{
    public $timestamps = false;
    protected $table = 'item';
    protected $primaryKey = 'codigo_item';

    protected $fillable = [
        'codigo_item',
        'descripcion',
        'cod_indicador'
    ];

    public function indicadores()
	{
		return $this->belongsTo('App\Models\Indicador', 'cod_indicador');
	}

    public function periodo()
    {
        return $this->belongsToMany('App\Models\Periodo', 'evaluacion','cod_item','cod_periodo')->withPivot('valor','observacion');
    }
}

?>