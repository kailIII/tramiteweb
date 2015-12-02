<?php

namespace TramiteWeb\Http\Controllers;

use Illuminate\Http\Request;

use TramiteWeb\Http\Requests;
use TramiteWeb\Http\Controllers\Controller;



class DocumentoController extends Controller
{
      public function mostrarMisDocumentos(){
        return view('misdocumentos.MisDocumentos');
}

    public function mostrarNuevoDocumento(){
    return view('NuevoDocumento');
}
    public function mostrarMisProveidos(){
        return view('MisProveidos');
    }


     public function mostrarMisDocumentosArchivados(){
         return view('DocArchivados');
    }


public function mostrarDocPorRecepcionar(){
    return view('DocPorRecepcionar');
}


    public function mostrarDocRecepcionados(){
        return view('DocRecepcionado');
    }
}


