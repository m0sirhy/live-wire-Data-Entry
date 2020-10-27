<?php

use App\Http\Controllers\GateController;
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

Route::get('/', function () {
    return view('entry.index');
});


Route::get('importExportView', [GateController::class, 'importExportView']);
Route::get('export', [GateController::class, 'export'])->name('export');
Route::post('import', [GateController::class, 'import'])->name('import');
