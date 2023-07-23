<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Link Pga Arta
Route::get('/linkpgaarta4d', 'App\Http\Controllers\ApiController@indexlinkpgaartas');
Route::post('/linkpgaarta4d', 'App\Http\Controllers\ApiController@storelinkpgaartas');
Route::get('/linkpgaarta4d/{id}', 'App\Http\Controllers\ApiController@showlinkpgaartas');
Route::put('/linkpgaarta4d/{id}', 'App\Http\Controllers\ApiController@updatelinkpgaartas');
Route::delete('/linkpgaarta4d/{id}', 'App\Http\Controllers\ApiController@destroylinkpgaartas');

// Link Pga Arwana
Route::get('/linkpgaarwanatoto', 'App\Http\Controllers\ApiController@indexlinkpgaarwana');
Route::post('/linkpgaarwanatoto', 'App\Http\Controllers\ApiController@storelinkpgaarwana');
Route::get('/linkpgaarwanatoto/{id}', 'App\Http\Controllers\ApiController@showlinkpgaarwana');
Route::put('/linkpgaarwanatoto/{id}', 'App\Http\Controllers\ApiController@updatelinkpgaarwana');
Route::delete('/linkpgaarwanatoto/{id}', 'App\Http\Controllers\ApiController@destroylinkpgaarwana');

// Link Pga Doyan
Route::get('/linkpgadoyantoto', 'App\Http\Controllers\ApiController@indexlinkpgadoyans');
Route::post('/linkpgadoyantoto', 'App\Http\Controllers\ApiController@storelinkpgadoyans');
Route::get('/linkpgadoyantoto/{id}', 'App\Http\Controllers\ApiController@showlinkpgadoyans');
Route::put('/linkpgadoyantoto/{id}', 'App\Http\Controllers\ApiController@updatelinkpgadoyans');
Route::delete('/linkpgadoyantoto/{id}', 'App\Http\Controllers\ApiController@destroylinkpgadoyans');

// Link Pga Jeep
Route::get('/linkpgajeeptoto', 'App\Http\Controllers\ApiController@indexlinkpgajeeps');
Route::post('/linkpgajeeptoto', 'App\Http\Controllers\ApiController@storelinkpgajeeps');
Route::get('/linkpgajeeptoto/{id}', 'App\Http\Controllers\ApiController@showlinkpgajeeps');
Route::put('/linkpgajeeptoto/{id}', 'App\Http\Controllers\ApiController@updatelinkpgajeeps');
Route::delete('/linkpgajeeptoto/{id}', 'App\Http\Controllers\ApiController@destroylinkpgajeeps');

// Link Pga Neon
Route::get('/linkpganeon4d', 'App\Http\Controllers\ApiController@indexlinkpganeons');
Route::post('/linkpganeon4d', 'App\Http\Controllers\ApiController@storelinkpganeons');
Route::get('/linkpganeon4d/{id}', 'App\Http\Controllers\ApiController@showlinkpganeons');
Route::put('/linkpganeon4d/{id}', 'App\Http\Controllers\ApiController@updatelinkpganeons');
Route::delete('/linkpganeon4d/{id}', 'App\Http\Controllers\ApiController@destroylinkpganeons');

// Link Pga Nero
Route::get('/linkpganero4d', 'App\Http\Controllers\ApiController@indexlinkpganeros');
Route::post('/linkpganero4d', 'App\Http\Controllers\ApiController@storelinkpganeros');
Route::get('/linkpganero4d/{id}', 'App\Http\Controllers\ApiController@showlinkpganeros');
Route::put('/linkpganero4d/{id}', 'App\Http\Controllers\ApiController@updatelinkpganeros');
Route::delete('/linkpganero4d/{id}', 'App\Http\Controllers\ApiController@destroylinkpganeros');

// Link Pga Roma
Route::get('/linkpgaromas', 'App\Http\Controllers\ApiController@indexlinkpgaromas');
Route::post('/linkpgaromas', 'App\Http\Controllers\ApiController@storelinkpgaromas');
Route::get('/linkpgaromas/{id}', 'App\Http\Controllers\ApiController@showlinkpgaromas');
Route::put('/linkpgaromas/{id}', 'App\Http\Controllers\ApiController@updatelinkpgaromas');
Route::delete('/linkpgaromas/{id}', 'App\Http\Controllers\ApiController@destroylinkpgaromas');

// Link Pga Ts
Route::get('/linkpgaroma4d', 'App\Http\Controllers\ApiController@indexlinkpgats');
Route::post('/linkpgaroma4d', 'App\Http\Controllers\ApiController@storelinkpgats');
Route::get('/linkpgaroma4d/{id}', 'App\Http\Controllers\ApiController@showlinkpgats');
Route::put('/linkpgaroma4d/{id}', 'App\Http\Controllers\ApiController@updatelinkpgats');
Route::delete('/linkpgaroma4d/{id}', 'App\Http\Controllers\ApiController@destroylinkpgats');

// Link Pga Zara
Route::get('/linkpgazara4d', 'App\Http\Controllers\ApiController@indexlinkpgazaras');
Route::post('/linkpgazara4d', 'App\Http\Controllers\ApiController@storelinkpgazaras');
Route::get('/linkpgazara4d/{id}', 'App\Http\Controllers\ApiController@showlinkpgazaras');
Route::put('/linkpgazara4d/{id}', 'App\Http\Controllers\ApiController@updatelinkpgazaras');
Route::delete('/linkpgazara4d/{id}', 'App\Http\Controllers\ApiController@destroylinkpgazaras');

// Idn Slideshow
Route::get('/idnslideshows', 'App\Http\Controllers\ApiController@indexidnslideshows');
Route::post('/idnslideshows', 'App\Http\Controllers\ApiController@storeidnslideshows');
Route::get('/idnslideshows/{id}', 'App\Http\Controllers\ApiController@showidnslideshows');
Route::put('/idnslideshows/{id}', 'App\Http\Controllers\ApiController@updateidnslideshows');
Route::delete('/idnslideshows/{id}', 'App\Http\Controllers\ApiController@destroyidnslideshows');

// Arta4d VIP
Route::get('/Arta4dvip', 'App\Http\Controllers\ApiController@indexarta4dvips');
Route::post('/Arta4dvip', 'App\Http\Controllers\ApiController@storearta4dvip');
Route::get('/Arta4dvip/{id}', 'App\Http\Controllers\ApiController@showarta4dvip');
Route::put('/Arta4dvip/{id}', 'App\Http\Controllers\ApiController@updatearta4dvip');
Route::delete('/Arta4dvip/{id}', 'App\Http\Controllers\ApiController@destroyarta4dvip');

// Arwana VIP
Route::get('/Arwanatotovip', 'App\Http\Controllers\ApiController@indexarwanatotovips');
Route::post('/Arwanatotovip', 'App\Http\Controllers\ApiController@storearwanatotovips');
Route::get('/Arwanatotovip/{id}', 'App\Http\Controllers\ApiController@showarwanatotovips');
Route::put('/Arwanatotovip/{id}', 'App\Http\Controllers\ApiController@updatearwanatotovips');
Route::delete('/Arwanatotovip/{id}', 'App\Http\Controllers\ApiController@destroyarwanatotovips');

// Doyan VIP
Route::get('/Doyantotovip', 'App\Http\Controllers\ApiController@indexdoyantotovips');
Route::post('/Doyantotovip', 'App\Http\Controllers\ApiController@storedoyantotovips');
Route::get('/Doyantotovip/{id}', 'App\Http\Controllers\ApiController@showdoyantotovips');
Route::put('/Doyantotovip/{id}', 'App\Http\Controllers\ApiController@updatedoyantotovips');
Route::delete('/Doyantotovip/{id}', 'App\Http\Controllers\ApiController@destroydoyantotovips');

// Jeep VIP
Route::get('/Jeeptotovip', 'App\Http\Controllers\ApiController@indexjeeptotovips');
Route::post('/Jeeptotovip', 'App\Http\Controllers\ApiController@storejeeptotovips');
Route::get('/Jeeptotovip/{id}', 'App\Http\Controllers\ApiController@showjeeptotovips');
Route::put('/Jeeptotovip/{id}', 'App\Http\Controllers\ApiController@updatejeeptotovips');
Route::delete('/Jeeptotovip/{id}', 'App\Http\Controllers\ApiController@destroyjeeptotovips');

// Neon VIP
Route::get('/Neon4dvip', 'App\Http\Controllers\ApiController@indexneon4dvips');
Route::post('/Neon4dvip', 'App\Http\Controllers\ApiController@storeneon4dvips');
Route::get('/Neon4dvip/{id}', 'App\Http\Controllers\ApiController@showneon4dvips');
Route::put('/Neon4dvip/{id}', 'App\Http\Controllers\ApiController@updateneon4dvips');
Route::delete('/Neon4dvip/{id}', 'App\Http\Controllers\ApiController@destroyneon4dvips');

// Nero VIP
Route::get('/Nero4dvip', 'App\Http\Controllers\ApiController@indexnero4dvips');
Route::post('/Nero4dvip', 'App\Http\Controllers\ApiController@storenero4dvips');
Route::get('/Nero4dvip/{id}', 'App\Http\Controllers\ApiController@shownero4dvips');
Route::put('/Nero4dvip/{id}', 'App\Http\Controllers\ApiController@updatenero4dvips');
Route::delete('/Nero4dvip/{id}', 'App\Http\Controllers\ApiController@destroynero4dvips');

// Roma VIP
Route::get('/Roma4dvip', 'App\Http\Controllers\ApiController@indexroma4dvips');
Route::post('/Roma4dvip', 'App\Http\Controllers\ApiController@storeroma4dvips');
Route::get('/Roma4dvip/{id}', 'App\Http\Controllers\ApiController@showroma4dvips');
Route::put('/Roma4dvip/{id}', 'App\Http\Controllers\ApiController@updateroma4dvips');
Route::delete('/Roma4dvip/{id}', 'App\Http\Controllers\ApiController@destroyroma4dvips');

// TS VIP
Route::get('/Tstotovip', 'App\Http\Controllers\ApiController@indextstotovips');
Route::post('/Tstotovip', 'App\Http\Controllers\ApiController@storetstotovips');
Route::get('/Tstotovip/{id}', 'App\Http\Controllers\ApiController@showtstotovips');
Route::put('/Tstotovip/{id}', 'App\Http\Controllers\ApiController@updatetstotovips');
Route::delete('/Tstotovip/{id}', 'App\Http\Controllers\ApiController@destroytstotovips');

// Banner Modal
Route::get('/bannermodal', 'App\Http\Controllers\ApiController@indexbannermodal');
Route::post('/bannermodal', 'App\Http\Controllers\ApiController@storebannermodal');
Route::get('/bannermodal/{id}', 'App\Http\Controllers\ApiController@showbannermodal');
Route::put('/bannermodal/{id}', 'App\Http\Controllers\ApiController@updatebannermodal');
Route::delete('/bannermodal/{id}', 'App\Http\Controllers\ApiController@destroybannermodal');
