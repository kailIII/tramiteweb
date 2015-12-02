<?php

namespace TramiteWeb\Http\Controllers;

use Illuminate\Http\Request;

use TramiteWeb\Http\Requests;
use TramiteWeb\Http\Controllers\Controller;

class DocumentoController extends Controller
{
      public function mostrarMisDocumentos()
{
return view('MisDocumentos');
}

public function mostrarNuevoDocumento(){
    return view('NuevoDocumento');
}
    public function mostrarMisProveidos(){
        return view('MisProveidos');
    }

}
