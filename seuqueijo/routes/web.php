<?php
Use App\Http\Controllers\FormController;
Use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contacts/contact', [FormController::class, 'form']);

Route::get('/products/product', [ProductController::class, 'showProduct']);


Route::get('/materias/{id?}', function ($id = null) {
    $materia = array(
        '1' => 'Banco de dados',
        '2' => 'Calculo I',
        '3' => 'Arquitetura de Computadores I',
        '4' => 'Trabalho Interdisciplinar III',
        '5' => 'Engenharia de Software I',
    );
    return view('materias',['materia' => $materia], ['id' => $id]);
});

Route::get('/materias', function () {
    return view('materias');
});

// Route::get('/contato', function () {
//     return view('contato');
// });

// Route::get('/produtos', function () {

//     $busca = request('search');

//     return view('produtos',['busca' => $busca]);
// });

// Route::get('/produto/{id}', function ($id) {
//     return view('produto', ['id' => $id]);
// });

// Route::get('/produtos_teste/{id?}', function ($id = null) {
//     return view('produto', ['id' => $id]);
// });