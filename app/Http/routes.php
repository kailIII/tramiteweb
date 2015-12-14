<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'inicio',function () {
    return view('plantilla');
}]);



Route::get('mis-proveidos',[
    'as'=>'misproveidos',
    'uses'=>'DocumentoController@mostrarMisProveidos'
]);

Route::post('mis-proveidos',[
    'as'=>'buscarProveidos',
    'uses'=>'DocumentoController@buscarProveido'
]);

Route::get('mis-proveidos',[
    'as'=>'misproveidos',
    'uses'=>'DocumentoController@mostrarMisProveidos'
]);
Route::post('mis-doc-archivados',[
    'as'=>'buscarDocArchivados',
    'uses'=>'DocumentoController@buscarDocArchivados'
]);

Route::get('doc-recepcionado',[
    'as'=>'DocRecepcionado',
    'uses'=>'DocumentoController@buscarDocRecepcionado'
]);
Route::post('doc-recepcionado',[
    'as'=>'buscarDocRecepcionado',
    'uses'=>'DocumentoController@buscarDocRecepcionado'
]);





Route::get('mis-documentos',[
    'as'=>'misdocumentos',
    'uses'=>'DocumentoController@mostrarMisDocumentos'
]);


Route::get('mis-documentos-archivados',[
    'as'=>'misdocumentosarchivados',
    'uses'=>'DocumentoController@mostrarMisDocumentosArchivados'
]);



Route::get('doc-por-recepcionar',[
    'as'=>'docporrecepcionar',
    'uses'=>'DocumentoController@mostrarDocPorRecepcionar'
]);

Route::get('doc-recepcionados',[
    'as'=>'docrecepcionados',
    'uses'=>'DocumentoController@mostrarDocRecepcionados'
]);

Route::get('nuevo-documento',[
    'as'=>'nuevodocumento',
    'uses'=>'DocumentoController@mostrarNuevoDocumento'
]);

Route::post('documento/grabar',[
    'as'=>'documento.grabar',
    'uses'=>'DocumentoController@grabar'
]);

Route::get('documento/recepcionar/{i}',[
    'as'=>'documento.recepcionar',
    'uses'=>'DocumentoController@recepcionar'
]);

Route::get('{i}/doc-por-derivar',[
    'as'=>'documento.derivar',
    'uses'=>'DocumentoController@mostrarDerivarDocumento'
]);

Route::post('documento/derivado',[
    'as'=>'documento.derivado',
    'uses'=>'DocumentoController@derivado'
]);


