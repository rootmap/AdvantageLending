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

Route::get('/', 'FrontModuleController@index');

Auth::routes();
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::group(['middleware' => 'auth'], function () {
    
});

Route::get('/home', 'FrontModuleController@index')->name('home');
Route::get('/how-it-works', 'FrontModuleController@howitworks');
Route::get('/types-of-funding', 'FrontModuleController@typesoffunding');
Route::get('/about-advantage-lending', 'FrontModuleController@about');
Route::get('/faq', 'FrontModuleController@faq');
Route::get('/for-attorneys', 'FrontModuleController@forattorneys');
Route::get('/resource', 'FrontModuleController@resources');
Route::get('/contact-us', 'FrontModuleController@contactus');
Route::get('/careers', 'FrontModuleController@careers');
Route::get('/for-brokers', 'FrontModuleController@forbrokers');
Route::get('/complete-application', 'FrontModuleController@completeapplication');
Route::get('/crud', 'CrudController@crud')->name('crud');
Route::post('/crud', 'CrudController@crudgenarate')->name('crudgenarate');


//======================== Sitesettings Route Start ===============================//
Route::get('/sitesettings/list','SitesettingsController@show');
Route::get('/sitesettings/create','SitesettingsController@create');
Route::get('/sitesettings/edit/{id}','SitesettingsController@edit');
Route::get('/sitesettings/delete/{id}','SitesettingsController@destroy');
Route::get('/sitesettings','SitesettingsController@index');
Route::get('/sitesettings/export/excel','SitesettingsController@ExportExcel');
Route::get('/sitesettings/export/pdf','SitesettingsController@ExportPDF');
Route::post('/sitesettings','SitesettingsController@store');
Route::post('/sitesettings/ajax','SitesettingsController@ajaxSave');
Route::post('/sitesettings/datatable/ajax','SitesettingsController@datatable');
Route::post('/sitesettings/update/{id}','SitesettingsController@update');
//======================== Sitesettings Route End ===============================//
//======================== Slideranimatedtext Route Start ===============================//
Route::get('/slideranimatedtext/list','SlideranimatedtextController@show');
Route::get('/slideranimatedtext/create','SlideranimatedtextController@create');
Route::get('/slideranimatedtext/edit/{id}','SlideranimatedtextController@edit');
Route::get('/slideranimatedtext/delete/{id}','SlideranimatedtextController@destroy');
Route::get('/slideranimatedtext','SlideranimatedtextController@index');
Route::get('/slideranimatedtext/export/excel','SlideranimatedtextController@ExportExcel');
Route::get('/slideranimatedtext/export/pdf','SlideranimatedtextController@ExportPDF');
Route::post('/slideranimatedtext','SlideranimatedtextController@store');
Route::post('/slideranimatedtext/ajax','SlideranimatedtextController@ajaxSave');
Route::post('/slideranimatedtext/datatable/ajax','SlideranimatedtextController@datatable');
Route::post('/slideranimatedtext/update/{id}','SlideranimatedtextController@update');
//======================== Slideranimatedtext Route End ===============================//

//======================== Slidercontent Route Start ===============================//
Route::get('/slidercontent/list','SlidercontentController@show');
Route::get('/slidercontent/create','SlidercontentController@create');
Route::get('/slidercontent/edit/{id}','SlidercontentController@edit');
Route::get('/slidercontent/delete/{id}','SlidercontentController@destroy');
Route::get('/slidercontent','SlidercontentController@index');
Route::get('/slidercontent/export/excel','SlidercontentController@ExportExcel');
Route::get('/slidercontent/export/pdf','SlidercontentController@ExportPDF');
Route::post('/slidercontent','SlidercontentController@store');
Route::post('/slidercontent/ajax','SlidercontentController@ajaxSave');
Route::post('/slidercontent/datatable/ajax','SlidercontentController@datatable');
Route::post('/slidercontent/update/{id}','SlidercontentController@update');
//======================== Slidercontent Route End ===============================//

//======================== Howwehelp Route Start ===============================//
Route::get('/howwehelp/list','HowwehelpController@show');
Route::get('/howwehelp/create','HowwehelpController@create');
Route::get('/howwehelp/edit/{id}','HowwehelpController@edit');
Route::get('/howwehelp/delete/{id}','HowwehelpController@destroy');
Route::get('/howwehelp','HowwehelpController@index');
Route::get('/howwehelp/export/excel','HowwehelpController@ExportExcel');
Route::get('/howwehelp/export/pdf','HowwehelpController@ExportPDF');
Route::post('/howwehelp','HowwehelpController@store');
Route::post('/howwehelp/ajax','HowwehelpController@ajaxSave');
Route::post('/howwehelp/datatable/ajax','HowwehelpController@datatable');
Route::post('/howwehelp/update/{id}','HowwehelpController@update');
//======================== Howwehelp Route End ===============================//
//======================== Betterdaysstarttoday Route Start ===============================//
Route::get('/betterdaysstarttoday/list','BetterdaysstarttodayController@show');
Route::get('/betterdaysstarttoday/create','BetterdaysstarttodayController@create');
Route::get('/betterdaysstarttoday/edit/{id}','BetterdaysstarttodayController@edit');
Route::get('/betterdaysstarttoday/delete/{id}','BetterdaysstarttodayController@destroy');
Route::get('/betterdaysstarttoday','BetterdaysstarttodayController@index');
Route::get('/betterdaysstarttoday/export/excel','BetterdaysstarttodayController@ExportExcel');
Route::get('/betterdaysstarttoday/export/pdf','BetterdaysstarttodayController@ExportPDF');
Route::post('/betterdaysstarttoday','BetterdaysstarttodayController@store');
Route::post('/betterdaysstarttoday/ajax','BetterdaysstarttodayController@ajaxSave');
Route::post('/betterdaysstarttoday/datatable/ajax','BetterdaysstarttodayController@datatable');
Route::post('/betterdaysstarttoday/update/{id}','BetterdaysstarttodayController@update');
//======================== Betterdaysstarttoday Route End ===============================//

//======================== Fundingyouneedcontent Route Start ===============================//
Route::get('/fundingyouneedcontent/list','FundingyouneedcontentController@show');
Route::get('/fundingyouneedcontent/create','FundingyouneedcontentController@create');
Route::get('/fundingyouneedcontent/edit/{id}','FundingyouneedcontentController@edit');
Route::get('/fundingyouneedcontent/delete/{id}','FundingyouneedcontentController@destroy');
Route::get('/fundingyouneedcontent','FundingyouneedcontentController@index');
Route::get('/fundingyouneedcontent/export/excel','FundingyouneedcontentController@ExportExcel');
Route::get('/fundingyouneedcontent/export/pdf','FundingyouneedcontentController@ExportPDF');
Route::post('/fundingyouneedcontent','FundingyouneedcontentController@store');
Route::post('/fundingyouneedcontent/ajax','FundingyouneedcontentController@ajaxSave');
Route::post('/fundingyouneedcontent/datatable/ajax','FundingyouneedcontentController@datatable');
Route::post('/fundingyouneedcontent/update/{id}','FundingyouneedcontentController@update');
//======================== Fundingyouneedcontent Route End ===============================//
//======================== Fundingyouneeddata Route Start ===============================//
Route::get('/fundingyouneeddata/list','FundingyouneeddataController@show');
Route::get('/fundingyouneeddata/create','FundingyouneeddataController@create');
Route::get('/fundingyouneeddata/edit/{id}','FundingyouneeddataController@edit');
Route::get('/fundingyouneeddata/delete/{id}','FundingyouneeddataController@destroy');
Route::get('/fundingyouneeddata','FundingyouneeddataController@index');
Route::get('/fundingyouneeddata/export/excel','FundingyouneeddataController@ExportExcel');
Route::get('/fundingyouneeddata/export/pdf','FundingyouneeddataController@ExportPDF');
Route::post('/fundingyouneeddata','FundingyouneeddataController@store');
Route::post('/fundingyouneeddata/ajax','FundingyouneeddataController@ajaxSave');
Route::post('/fundingyouneeddata/datatable/ajax','FundingyouneeddataController@datatable');
Route::post('/fundingyouneeddata/update/{id}','FundingyouneeddataController@update');
//======================== Fundingyouneeddata Route End ===============================//
//======================== Youarenotalonecontent Route Start ===============================//
Route::get('/youarenotalonecontent/list','YouarenotalonecontentController@show');
Route::get('/youarenotalonecontent/create','YouarenotalonecontentController@create');
Route::get('/youarenotalonecontent/edit/{id}','YouarenotalonecontentController@edit');
Route::get('/youarenotalonecontent/delete/{id}','YouarenotalonecontentController@destroy');
Route::get('/youarenotalonecontent','YouarenotalonecontentController@index');
Route::get('/youarenotalonecontent/export/excel','YouarenotalonecontentController@ExportExcel');
Route::get('/youarenotalonecontent/export/pdf','YouarenotalonecontentController@ExportPDF');
Route::post('/youarenotalonecontent','YouarenotalonecontentController@store');
Route::post('/youarenotalonecontent/ajax','YouarenotalonecontentController@ajaxSave');
Route::post('/youarenotalonecontent/datatable/ajax','YouarenotalonecontentController@datatable');
Route::post('/youarenotalonecontent/update/{id}','YouarenotalonecontentController@update');
//======================== Youarenotalonecontent Route End ===============================//
//======================== Youarenotalonevideos Route Start ===============================//
Route::get('/youarenotalonevideos/list','YouarenotalonevideosController@show');
Route::get('/youarenotalonevideos/create','YouarenotalonevideosController@create');
Route::get('/youarenotalonevideos/edit/{id}','YouarenotalonevideosController@edit');
Route::get('/youarenotalonevideos/delete/{id}','YouarenotalonevideosController@destroy');
Route::get('/youarenotalonevideos','YouarenotalonevideosController@index');
Route::get('/youarenotalonevideos/export/excel','YouarenotalonevideosController@ExportExcel');
Route::get('/youarenotalonevideos/export/pdf','YouarenotalonevideosController@ExportPDF');
Route::post('/youarenotalonevideos','YouarenotalonevideosController@store');
Route::post('/youarenotalonevideos/ajax','YouarenotalonevideosController@ajaxSave');
Route::post('/youarenotalonevideos/datatable/ajax','YouarenotalonevideosController@datatable');
Route::post('/youarenotalonevideos/update/{id}','YouarenotalonevideosController@update');
//======================== Youarenotalonevideos Route End ===============================//
//======================== Helpcasetypes Route Start ===============================//
Route::get('/helpcasetypes/list','HelpcasetypesController@show');
Route::get('/helpcasetypes/create','HelpcasetypesController@create');
Route::get('/helpcasetypes/edit/{id}','HelpcasetypesController@edit');
Route::get('/helpcasetypes/delete/{id}','HelpcasetypesController@destroy');
Route::get('/helpcasetypes','HelpcasetypesController@index');
Route::get('/helpcasetypes/export/excel','HelpcasetypesController@ExportExcel');
Route::get('/helpcasetypes/export/pdf','HelpcasetypesController@ExportPDF');
Route::post('/helpcasetypes','HelpcasetypesController@store');
Route::post('/helpcasetypes/ajax','HelpcasetypesController@ajaxSave');
Route::post('/helpcasetypes/datatable/ajax','HelpcasetypesController@datatable');
Route::post('/helpcasetypes/update/{id}','HelpcasetypesController@update');
//======================== Helpcasetypes Route End ===============================//
//======================== Helpcasetypesdata Route Start ===============================//
Route::get('/helpcasetypesdata/list','HelpcasetypesdataController@show');
Route::get('/helpcasetypesdata/create','HelpcasetypesdataController@create');
Route::get('/helpcasetypesdata/edit/{id}','HelpcasetypesdataController@edit');
Route::get('/helpcasetypesdata/delete/{id}','HelpcasetypesdataController@destroy');
Route::get('/helpcasetypesdata','HelpcasetypesdataController@index');
Route::get('/helpcasetypesdata/export/excel','HelpcasetypesdataController@ExportExcel');
Route::get('/helpcasetypesdata/export/pdf','HelpcasetypesdataController@ExportPDF');
Route::post('/helpcasetypesdata','HelpcasetypesdataController@store');
Route::post('/helpcasetypesdata/ajax','HelpcasetypesdataController@ajaxSave');
Route::post('/helpcasetypesdata/datatable/ajax','HelpcasetypesdataController@datatable');
Route::post('/helpcasetypesdata/update/{id}','HelpcasetypesdataController@update');
//======================== Helpcasetypesdata Route End ===============================//
//======================== Neversettleforless Route Start ===============================//
Route::get('/neversettleforless/list','NeversettleforlessController@show');
Route::get('/neversettleforless/create','NeversettleforlessController@create');
Route::get('/neversettleforless/edit/{id}','NeversettleforlessController@edit');
Route::get('/neversettleforless/delete/{id}','NeversettleforlessController@destroy');
Route::get('/neversettleforless','NeversettleforlessController@index');
Route::get('/neversettleforless/export/excel','NeversettleforlessController@ExportExcel');
Route::get('/neversettleforless/export/pdf','NeversettleforlessController@ExportPDF');
Route::post('/neversettleforless','NeversettleforlessController@store');
Route::post('/neversettleforless/ajax','NeversettleforlessController@ajaxSave');
Route::post('/neversettleforless/datatable/ajax','NeversettleforlessController@datatable');
Route::post('/neversettleforless/update/{id}','NeversettleforlessController@update');
//======================== Neversettleforless Route End ===============================//