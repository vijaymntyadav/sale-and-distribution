<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'API\UserLoginController@login');
Route::get('logout','API\UserLoginController@logout');
Route::get('approve_cancel/{id}','API\UserLoginController@approveCancelSale');

Route::post('approved_all_sale_show','API\ApprovedSaleController@approvedAllSaleShow');
Route::get('approved_sale_show/{id}','API\ApprovedSaleController@approvedsaleshow');

Route::post('cancel_all_sale_show','API\CancelController@cancelAllSaleShow');
Route::get('cancel_sale_show/{id}','API\CancelController@cancelSaleShow');

Route::post('employee_sale','API\SaleController@employeeSaleShow');
Route::get('sale_create','API\SaleController@create');
Route::get('sale_details/{id}','API\SaleController@show');
Route::get('sale_edit/{id}','API\SaleController@edit');
Route::post('sale_delete','API\SaleController@destroy');
Route::post('sale_store','API\SaleController@store');
Route::post('sale_update','API\SaleController@update');

Route::post('employee_daily_report','API\DailyReportController@employeeDailyReport');
Route::post('entry_visit','API\DailyReportController@entryVisit');
Route::post('next_visit','API\DailyReportController@nextVisit');
Route::get('single_entry_show/{id}','API\DailyReportController@singleEntryShow');
Route::get('entry_visit_edit/{id}','API\DailyReportController@entryVisitEdit');
Route::post('entry_visit_update','API\DailyReportController@entryVisitUpdate');
Route::get('next_visit_edit/{id}','API\DailyReportController@nextVisitEdit');
Route::post('next_visit_update','API\DailyReportController@nextVisitUpdate');
Route::post('entry_visit_delete','API\DailyReportController@entryVisitDelete');
Route::post('next_visit_delete','API\DailyReportController@nextVisitDelete');

Route::post('return_product','API\ReturnController@store');

