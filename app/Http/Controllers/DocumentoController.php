<?php

namespace TramiteWeb\Http\Controllers;

use Illuminate\Http\Request;

use TramiteWeb\Entities\TipoDocumento;
use TramiteWeb\Http\Requests;
use TramiteWeb\Http\Controllers\Controller;
use TramiteWeb\Entities\Documento;



class DocumentoController extends Controller
{
    public function mostrarMisDocumentos()
    {
        $mostrarmisdocumento=new TipoDocumento();
        $tipodocumento=$mostrarmisdocumento->all()->lists('descripcion','id');
        return view('misdocumentos.MisDocumentos')->with(compact('tipodocumento'));
    }

    public function mostrarNuevoDocumento()
    {

        $nuevotipodocumento=new TipoDocumento();
        $tipodocumento=$nuevotipodocumento->all()->lists('descripcion','id');
        return view('NuevoDocumento')->with(compact('tipodocumento'));

    }
    public function mostrarMisProveidos()
    {
        $misproveidos=new TipoDocumento();
        $tipodocumento=$misproveidos->all()->lists('descripcion','id');
        return view('MisProveidos')->with(compact('tipodocumento'));
    }

    public function mostrarMisDocumentosArchivados()
    {
        $documentosarchivados=new TipoDocumento();
        $tipodocumento=$documentosarchivados->all()->lists('descripcion','id');
         return view('DocArchivados')->with(compact('tipodocumento'));
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
     * mtodo para grabar un documento, recibe como argumentos
     * todos los elementos del formulario
     * */
    public function grabar(Request $request)
    {
        $datos=$request->all();

        $datos['oficina_id']=1;

        Documento::create($datos);

        return \Redirect::route('nuevodocumento');
    }
}


