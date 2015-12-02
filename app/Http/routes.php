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



Route::get('mis-documentos',[
    'as'=>'misdocumentos',
    'uses'=>'DocumentoController@mostrarMisDocumentos'
]);

Route::get('mis-documentos-archivados',[
    'as'=>'misdocumentosarchivados',
    'uses'=>'DocumentoController@mostrarMisDocumentosArchivados'
]);

