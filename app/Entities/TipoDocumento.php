<?php

namespace TramiteWeb\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    public function Documentos()
    {
        return $this->hasMany('TramiteWeb\Entities\Documento');
    }
}
