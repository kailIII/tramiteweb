<?php

use Illuminate\Database\Seeder;
use TramiteWeb\Entities\Oficina;

class OficinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oficina::create(['nombre'=>'Tramite Documentario','nombre_corto'=>'TR','externo'=>'1']);
        Oficina::create(['nombre'=>'Gerencia Comercial','nombre_corto'=>'GC','externo'=>'0']);
        Oficina::create(['nombre'=>'Gerencia General','nombre_corto'=>'GG','externo'=>'0']);
        Oficina::create(['nombre'=>'Contabilidad','nombre_corto'=>'CG','externo'=>'0']);
        Oficina::create(['nombre'=>'Sistemas','nombre_corto'=>'OS','externo'=>'0']);
        Oficina::create(['nombre'=>'Ingenieria','nombre_corto'=>'OF.ING','externo'=>'0']);
        Oficina::create(['nombre'=>'Recursos humanos','nombre_corto'=>'DIV-RR.HH','externo'=>'0']);
        Oficina::create(['nombre'=>'Logistica','nombre_corto'=>'DL','externo'=>'0']);
        Oficina::create(['nombre'=>'Asesoria Legal','nombre_corto'=>'ALI','externo'=>'0']);
        Oficina::create(['nombre'=>'Organo de Control Interno','nombre_corto'=>'OCI','externo'=>'0']);
        Oficina::create(['nombre'=>'Administracion','nombre_corto'=>'GAF','externo'=>'0']);
        Oficina::create(['nombre'=>'Imagen Institucional','nombre_corto'=>'IMAGEN','externo'=>'0']);
        Oficina::create(['nombre'=>'Planificacion','nombre_corto'=>'OPP','externo'=>'0']);
        Oficina::create(['nombre'=>'Operaciones','nombre_corto'=>'GOM','externo'=>'0']);
        Oficina::create(['nombre'=>'Catastro Comercial','nombre_corto'=>'CAT - COM','externo'=>'0']);
        Oficina::create(['nombre'=>'Facturacion','nombre_corto'=>'D.FAC Y MED - G Comercial','externo'=>'0']);
        Oficina::create(['nombre'=>'Comercializacion y Cobranza','nombre_corto'=>'JCC - GC','externo'=>'0']);
        Oficina::create(['nombre'=>'Unidad de Control de Calidad','nombre_corto'=>'UCC','externo'=>'0']);
        Oficina::create(['nombre'=>'Medicion','nombre_corto'=>'E.M-D.FAC Y MED - G Comercial','externo'=>'0']);
        Oficina::create(['nombre'=>'Control Patrimonial','nombre_corto'=>'RESP.CONTROL PATR.','externo'=>'0']);
        Oficina::create(['nombre'=>'Atencion al cliente-San Vicente','nombre_corto'=>'EAC - SV','externo'=>'0']);
        Oficina::create(['nombre'=>'Catastro Tecnico','nombre_corto'=>'CTCCFCM','externo'=>'0']);
        Oficina::create(['nombre'=>'Recaudacion - San Vicente','nombre_corto'=>'RECAUDACION CAC - SAN VICENTE','externo'=>'0']);
        Oficina::create(['nombre'=>'Almacen','nombre_corto'=>'AC','externo'=>'0']);
        Oficina::create(['nombre'=>'CAC Imperial','nombre_corto'=>'CAC Imperial','externo'=>'0']);
        Oficina::create(['nombre'=>'Directorio','nombre_corto'=>'','externo'=>'0']);
        Oficina::create(['nombre'=>'Comite especial','nombre_corto'=>'','externo'=>'0']);
        Oficina::create(['nombre'=>'Archivo General','nombre_corto'=>'','externo'=>'0']);
        Oficina::create(['nombre'=>'Tesoreria','nombre_corto'=>'TESO','externo'=>'0']);

    }
}
