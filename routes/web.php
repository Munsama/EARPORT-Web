<?php

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
});

Route::get('/admin_index','EarportController@index');
Route::get('/admin_dashboard','EarportController@dashboard');
Route::get('/admin_editprofil','EarportController@editprofil');
Route::get('/admin_akun_admin','EarportController@admin');
Route::get('/admin_akun_admin1','EarportController@admin1');
Route::get('/admin_akun_customer','EarportController@customer');
Route::get('/admin_akun_petugas','EarportController@petugas');
Route::get('/admin_informasi_kategori','EarportController@kategori');
Route::get('/admin_informasi_solusi','EarportController@solusi');
Route::get('/admin_informasi_status','EarportController@status');
Route::get('/admin_laporan','EarportController@laporan');
Route::get('/admin_detaillaporan','EarportController@detaillaporan');
Route::get('/admin_data_pelaporan_belum','EarportController@belum');
Route::get('/admin_data_pelaporan_proses','EarportController@proses');
Route::get('/admin_data_pelaporan_selesai','EarportController@selesai');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('admin', 'UsersController');
// Route::post('admin/update', 'UsersController@update')->name('admin.update');
// Route::get('admin/destroy/{id}', 'UsersController@destroy');

Route::resource('earportadmin','EarportAdminController');
Route::resource('earportcustomer','EarportCustomerController');
Route::resource('earportpetugas','EarportPetugasController');

Route::resource('admin_crud','EarportAdminController');
Route::resource('kategori_crud','EarportKategoriController');
Route::resource('solusi_crud','EarportSolusiController');
Route::resource('status_crud','EarportStatusController');
// Route::resource('status', 'EarportStatusController');
// Route::post('status/update', 'EarportStatusController@update')->name('status.update');
// Route::get('status/destroy/{id}', 'EarportStatusController@destroy');

// Route:: get ('admin_informasi_solusi',[
// 'uses' => 'EarportSolusiController@index',
// 'as' => 'solusi'
// ]);
// Route:: post ('admin_informasi_solusi/tambah',[
//     'uses' => 'EarportSolusiController@create',
//     'as' => 'solusi.create'
//     ]);
// Route:: post ('admin_informasi_solusi/{id}/update',[
//     'uses' => 'EarportSolusiController@update',
//     'as' => 'solusi.update'
//     ]);
// Route:: get ('admin_informasi_solusi/delete/{id}',[
//     'uses' => 'EarportSolusiController@delete',
//     'as' => 'solusi.delete'
//     ]);
Route::resource('earportlaporan','EarportLaporanController');

Route::get('/edit_profil','ProfilController@indexprofil');
Route::post('/edit_profil','ProfilController@editprofil');

// Route::resource('kategori_crud', 'EarportKategoriController');
// Route::post('kategori_crud/store', 'EarportKategoriController@store');
// Route::get('kategori_crud/delete/{id}', 'EarportKategoriController@destroy');

//  Route::resource('ajax-crud-list', 'UsersController');
//  Route::post('ajax-crud-list/store', 'UsersController@store');
//  Route::get('ajax-crud-list/delete/{id}', 'UsersController@destroy');

 //tutorial weblesson
Route::resource('ajax-crud', 'AjaxCrudController');
Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');
Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');

//admin crud
Route::resource('crud_admin', 'CRUDadmincontroller');
Route::post('crud_admin/update', 'CRUDadmincontroller@update')->name('crud_admin.update');
Route::get('crud_admin/destroy/{id}', 'CRUDadmincontroller@destroy');

//customer crud
Route::resource('crud_customer', 'CRUDcustomercontroller');
Route::post('crud_customer/update', 'CRUDcustomercontroller@update')->name('crud_customer.update');
Route::get('crud_customer/destroy/{id}', 'CRUDcustomercontroller@destroy');

//petugas crud
Route::resource('crud_petugas', 'CRUDpetugascontroller');
Route::post('crud_petugas/update', 'CRUDpetugascontroller@update')->name('crud_petugas.update');
Route::get('crud_petugas/destroy/{id}', 'CRUDpetugascontroller@destroy');

//kategori crud
Route::resource('crud_kategori', 'CRUDkategoricontroller');
Route::post('crud_kategori/update', 'CRUDkategoricontroller@update')->name('crud_kategori.update');
Route::get('crud_kategori/destroy/{id}', 'CRUDkategoricontroller@destroy');

//solusi crud
Route::resource('crud_solusi', 'CRUDsolusicontroller');
Route::post('crud_solusi/update', 'CRUDsolusicontroller@update')->name('crud_solusi.update');
Route::get('crud_solusi/destroy/{id}', 'CRUDsolusicontroller@destroy');

//solusi crud
Route::resource('crud_status', 'CRUDstatuscontroller');
Route::post('crud_status/update', 'CRUDstatuscontroller@update')->name('crud_status.update');
Route::get('crud_status/destroy/{id}', 'CRUDstatuscontroller@destroy');

Route::resource('crud_laporan', 'CRUDlaporancontroller');
Route::post('crud_laporan/update', 'CRUDlaporancontroller@update')->name('crud_laporan.update');
Route::get('crud_laporan/destroy/{id}', 'CRUDlaporancontroller@destroy');

//web public
Route::get('/index','PublicController@index');
Route::get('/laporan','PublicController@laporan');
Route::get('/tentang_kami','PublicController@tentangkami');

