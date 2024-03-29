<?php

namespace TramiteWeb\Http\Controllers;

use Illuminate\Http\Request;

use TramiteWeb\Entities\HistorialDocumento;
use TramiteWeb\Entities\TipoDocumento;
use TramiteWeb\Http\Requests;
use TramiteWeb\Http\Controllers\Controller;
use TramiteWeb\Entities\Documento;
use TramiteWeb\Entities\Oficina;


class DocumentoController extends Controller
{
    public function mostrarMisDocumentos()
    {
        $mostrarmisdocumento=new TipoDocumento();
        $tipodocumento=$mostrarmisdocumento->all()->lists('descripcion','id');
        return view('misdocumentos.MisDocumentos')->with(compact('tipodocumento'));
    }

    public function buscarProveido(Request $request)
    {
        $datos=$request->all();
        $criterio=$datos['nombre'];
        $busqueda=Documento::where('asunto','like','%' . $criterio . '%')->get();
        dd($busqueda);

    }

    public function buscarDocArchivados(Request $request)
    {
        $datos=$request->all();
        $criterio=$datos['nombre'];
        $busqueda=Documento::where('asunto','like','%' . $criterio . '%')->get();
        dd($busqueda);

    }

    public function buscarDocRecepcionado(Request $request)
    {
        $datos=$request->all();
        $criterio=$datos['nombre'];
        $busqueda=Documento::where('asunto','like','%' . $criterio . '%')->get();
        dd($busqueda);

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
        $oficina_id=5;
        $historicosDocumento=historialDocumento::where('oficina_destino_id',$oficina_id)->where('estado','=','Sin recibir')->get();
        //dd($documentos);
        return view('DocPorRecepcionar')->with(compact('historicosDocumento'));
    }

    public function mostrarDocRecepcionados()
    {
        return view('DocRecepcionado');

    }

    /*
     * mtodo para grabar un documento, recibe como argumentos
     * todos los elementos del formulario
     * */

    public function mostrarDerivarDocumento($i)
    {
        $documento=Documento::find($i);
        $oficinas=Oficina::all();
        return view('derivar.DerivarDoc')->with(compact('oficinas','documento'));
    }


    public function grabar(Request $request)
    {
        $datos=$request->all();

        $datos['oficina_id']=5 ;
        $datos['remitente_id']=1;
        $documento=Documento::create($datos);

        return \Redirect::route('documento.derivar',$documento->id);
    }

    public function derivado(Request $request)
    {
        $datosderivados=$request->all();
        
        /*$datosderivados['user_id']=1;
        $datosderivados['documento_id']=1;
        $datosderivados['oficina_origen_id']=1;
        $datosderivados['fecha_emision']=1;
        $datosderivados['oficina_destino_id']=1;
        $datosderivados['estado']=1;
        $datosderivados['eliminado']=1;
        HistorialDocumento::create($datosderivados);*/

        $oficinas=$datosderivados['oficina_id'];
        foreach($oficinas as $oficina)
        {
            $historial = new HistorialDocumento();
            $historial->user_id=1;
            $historial->documento_id=$datosderivados['documento_id'];
            $historial->oficina_origen_id=1;
            $historial->oficina_destino_id=$oficina;
            $historial->estado=1;
            $historial->eliminado=1;
            $historial->save();
        }

        return \Redirect::route('nuevodocumento');
    }

    public function recepcionar($id)
    {
        $historico=HistorialDocumento::find($id);
        $historico->estado='Recibido';
        $historico->save();
        return "jejeje";
    }
}