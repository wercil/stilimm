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

Route::get('/','AnasayfaController@index')->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}','KategoriController@index')->name('kategori');

Route::get('/urun/{slug_urunadi}','UrunController@index')->name('urun');


Route::get('/sepet', 'SepetController@index')->name('sepet');

Route::get('/odeme','OdemeController@index')->name('odeme');

Route::get('/siparisler','SiparisController@index')->name('siparisler');

Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');

Route::group(['prefix'=>'kullanici'],function (){

    Route::get('/oturumac','KullaniciController@giris_form')->name('kullanici.oturumac');
    Route::get('/kaydol','KullaniciController@kaydol_form')->name('kullanici.kaydol');
    Route::get('/adres','KullaniciController@index')->name('kullanici.adres');
    Route::get('/iptal','KullaniciController@iptal_form')->name('kullanici.uyelikiptal');
    Route::get('/kuyelik','KullaniciController@uyelik_form')->name('kullanici.uyelikBilgileri');
    Route::get('/kombin','KullaniciController@kombin_form')->name('kullanici.kombin');

});
Route::group(['prefix'=>'bayilik'],function (){

    Route::get('/bayiuyelik','BayilikController@giris_form')->name('bayilik.bayilikkayit');
    Route::get('/bayikaydol','BayilikController@kaydol_form')->name('bayilik.bayilikoturumac');
    Route::get('/badres','BayilikController@index')->name('bayilik.badres');
    Route::get('/buyelik','BayilikController@uyelik_form')->name('bayilik.bayilikBilgileri');


});
Route::get('/anasayfa','KullaniciAnasayfaController@index')->name('kanasayfa');
Route::get('/aski','askiController@index')->name('aski');
Route::get('/askibagis','BagisOdemeController@index')->name('bagis');







