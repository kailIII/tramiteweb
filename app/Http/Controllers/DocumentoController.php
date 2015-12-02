<?php

namespace TramiteWeb\Http\Controllers;

use Illuminate\Http\Request;

use TramiteWeb\Http\Requests;
use TramiteWeb\Http\Controllers\Controller;
use TramiteWeb\Entities\Documento;


class DocumentoController extends Controller
{
    public function mostrarMisDocumentos()
    {
        return view('misdocumentos.MisDocumentos');
    }

    public function mostrarNuevoDocumento()
    {
        return view('NuevoDocumento');
    }
    public function mostrarMisProveidos()
    {
        return view('MisProveidos');
    }

    public function mostrarMisDocumentosArchivados()
    {
         return view('DocArchivados');
    }

    public function mostrarDocPorRecepcionar()
    {
        return view('DocPorRecepcionar');
    }

    public function mostrarDocRecepcionados()
    {
        return view('DocRecepcionado');
    }

    /*
     * método para grabar un documento, recibe como argumentos
     * todos los elementos del formulario
     * */
    public function grabar(Request $request)
    {
        $datos=$request->all();

        $datos['oficina_id']=1;

        Documento::create($datos);

        return view('NuevoDocumento');
    }
}


