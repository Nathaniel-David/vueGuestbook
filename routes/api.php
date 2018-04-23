<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function(){
	return App\Signature::all();
});

Route::resource('signatures', 'Api\SignatureController')
    ->only(['index', 'store', 'show']);

Route::put('signatures/{signature}/report', 'Api\ReportSignature@update');