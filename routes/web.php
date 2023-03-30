<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     echo "inicio";
// });

// Route::get('/teste', function () {
//     echo "teste";
// });


// Route::get('/', [App\Http\Controllers\Teste::class, 'index'])->name('home');
// Route::get('/servicos', [App\Http\Controllers\Teste::class, 'servicos'])->name('servicos');
// Route::get('/galeria/{pag}', [App\Http\Controllers\Teste::class, 'galeria'])->name('galeria');
// Route::get('/contatos/{nome}/{apelido?}', [App\Http\Controllers\Teste::class, 'contatos'])->name('contatos');

//Route::get('/', "Main@formulario")->name('formulario');
Route::get('/', [\App\Http\Controllers\Main::class, 'formulario'])->name('formulario');
Route::post('/submissao', [\App\Http\Controllers\Main::class, 'submissao'])->name('submissao');

Route::get('/upload', [\App\Http\Controllers\Main::class, 'upload'])->name('upload');
Route::post('/upload_submissao', [\App\Http\Controllers\Main::class, 'upload_submissao'])->name('upload_submissao');

Route::get('/sessao', [\App\Http\Controllers\Main::class, 'sessao']);
Route::get('/ver_sessao', [\App\Http\Controllers\Main::class, 'ver_sessao']);
