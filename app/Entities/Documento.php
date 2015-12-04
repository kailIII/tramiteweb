<?php

namespace TramiteWeb\Entities;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
   protected $fillable=['oficina_id','tipo_documento_id','numero','asunto', 'anexos'];

   public function TipoDocumento()
   {
      return $this->belongsTo('TramiteWeb\Entities\TipoDocumento');
   }

   public function Oficina()
   {
      return $this->belongsTo('TramiteWeb\Entities\Oficina');
   }

}


