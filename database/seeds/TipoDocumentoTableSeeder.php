<?php

use Illuminate\Database\Seeder;
use TramiteWeb\Entities\TipoDocumento;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::create(['descripcion'=>'Informe']);
        TipoDocumento::create(['descripcion'=>'Memorandum']);
        TipoDocumento::create(['descripcion'=>'Oficio']);
        TipoDocumento::create(['descripcion'=>'Carta']);
        TipoDocumento::create(['descripcion'=>'Circular']);
        TipoDocumento::create(['descripcion'=>'Solicitud']);
        TipoDocumento::create(['descripcion'=>'Oficio Circular']);
        TipoDocumento::create(['descripcion'=>'Carta Circular']);
        TipoDocumento::create(['descripcion'=>'Memorandum Circular']);
        TipoDocumento::create(['descripcion'=>'Sobre cerrado']);
        TipoDocumento::create(['descripcion'=>'Oficio multiple']);
        TipoDocumento::create(['descripcion'=>'Orden de pago']);

    }
}
