<?php

namespace TramiteWeb\Entities;

use Illuminate\Database\Eloquent\Model;

class HistorialDocumento extends Model
{

    protected $fillable=['user_id',
                        'documento_id',
                        'oficina_origen_id',
                        'fecha_emision',
                        'oficina_destino_id',
                        'fecha_recepcion',
                        'oficina_id',
                        'estado',
                        'eliminado'];


    public function Documento()
    {
        return $this->belongsTo('TramiteWeb\Entities\Documento');
    }

}
