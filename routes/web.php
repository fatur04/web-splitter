<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SLAController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\sla_internalController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\SplitterController;

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

Route::get('/', [LoginController::class, 'showLoginForm']);
//Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){

    Route::get('/dashboard', [SLAController::class, 'dashboard']);
    Route::get('/hasil/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'hasil']);
    //Route::get('/dashboard_view/{primacom}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'dashboard_view']);

    Route::get('/index', [SLAController::class, 'index']);
    Route::get('/datatable', [SLAController::class, 'yajra']);
    Route::post('/simpan', [SLAController::class, 'simpan']);
    Route::get('/tambah', [SLAController::class, 'tambah']);
    Route::get('/edit/{id}', [SLAController::class, 'edit']);
    Route::get('/cari', [SLAController::class, 'loadData']);
    Route::get('/coba', [SLAController::class, 'coba']);
    Route::post('/update/{id}', [SLAController::class, 'update']);
    Route::delete('/delete/{id}', [SLAController::class, 'delete']);
    Route::get('/status/{id}', [SLAController::class, 'status']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/datatableuser', [UserController::class, 'yajra']);
    Route::post('/user/simpan', [UserController::class, 'simpan']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::delete('/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('/sla_internal', [sla_internalController::class, 'index']);
    Route::get('/datatable_internal', [sla_internalController::class, 'yajra']);
    Route::get('/tambah_internal', [sla_internalController::class, 'tambah']);
    Route::post('/simpan_internal', [sla_internalController::class, 'simpan']);
    Route::get('/edit_internal/{id}', [sla_internalController::class, 'edit']);
    Route::post('/update_internal/{id}', [sla_internalController::class, 'update']);
    Route::delete('/delete_internal/{id}', [sla_internalController::class, 'delete']);

    Route::get('/report', [SLAController::class, 'reportindex']);
    Route::get('/reportsla', [SLAController::class, 'reportsla']);
    Route::get('/reportsla_datatable', [SLAController::class, 'report_yazra']);
    Route::get('/carireport', [SLAController::class, 'report_loadData']);
    Route::get('/view_report/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'viewreport']);
    Route::get('/excel/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'export_excel']);
    Route::get('/pdf/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'pdf']);

    Route::get('/detail_report/{id}', [SLAController::class, 'detailreport']);
    Route::get('/view_detail/{id}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'viewdetail']);
    Route::get('/excel_detail/{id}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'export_exceldetail']);
    Route::get('/pdf_detail/{id}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'pdf_detail']);

    Route::get('/reportsite', [SLAController::class, 'reportsite']);
    Route::get('/view_site/{isp}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'viewsite']);
    Route::get('/excel_site/{isp}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'excel_site']);
    Route::get('/pdf_site/{isp}/{tgl_awal}/{tgl_akhir}', [SLAController::class, 'pdf_site']);

    Route::get('/monitoring', [MonitoringController::class, 'monitoring']);

    #Route::get('member', Members::class)->name('member');

    Route::get('/splitter', [SplitterController::class, 'index']);
    Route::get('/datatable_splitter', [SplitterController::class, 'yajra']);
    Route::get('/tambah_splitter', [SplitterController::class, 'tambah']);
    Route::post('/simpan_splitter', [SplitterController::class, 'simpan']);
    Route::get('/show_splitter/{id}', [SplitterController::class, 'show']);
    Route::get('/edit_splitter/{id}', [SplitterController::class, 'edit']);
    Route::post('/update_splitter/{id}', [SplitterController::class, 'update'])->name('splitter.show');
    Route::delete('/delete_splitter/{id}', [SplitterController::class, 'delete']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
