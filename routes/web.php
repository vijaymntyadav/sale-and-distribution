<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Users Route
Route::resource('user','Admin\UserController');
Route::post('/user/search','Admin\UserController@search')->name('exist.user.search');
Route::get('/all/user/edit/{id}','Admin\UserController@allUserEdit')->name('all.user.edit');
Route::post('/all/user/update','Admin\UserController@allUserUpdate')->name('all.user.update');
Route::get('/hierarchy/manager/{manager_id}','Admin\UserController@hierarchyManager');
Route::get('/hierarchy/regional/manager/{manager_id}/{regional_manager_id}','Admin\UserController@hierarchyRegionalManager');
Route::get('/hierarchy/area/sales/manager/{manager_id}/{regional_manager_id}/{area_sales_manager_id}','Admin\UserController@hierarchyAreaSalesManager');
Route::get('/dealer/edit/{id}','Admin\UserController@dealerEdit');
Route::get('/rm/edit/{id}','Admin\UserController@rmEdit');
Route::get('/asm/edit/{id}','Admin\UserController@asmEdit');
Route::get('/executive/edit/{id}','Admin\UserController@executiveEdit');
Route::post('/hierarchy/report/single/page','Admin\UserController@hierarchyReportSinglePage')->name('hierarchy.report.single.page');
Route::get('/user/rm/find/asm','Admin\UserController@userRMFindASM');
Route::get('/user/asm/find/executive','Admin\UserController@userASMFindExecutive');
Route::get('/user/executive/find/dealer','Admin\UserController@userExecutiveFindDealer');
//purchase route
Route::resource('purchase','Admin\PurchaseController');
//product_category route
Route::resource('product_category','Admin\ProductCategoryController');
Route::post('/product_category/search','Admin\ProductCategoryController@search')->name('exist.product_category.search');
Route::post('/select/product/brand','Admin\ProductCategoryController@select')->name('select.product.brand');
//brand route
Route::resource('brand','Admin\BrandController');
Route::post('/brand/search','Admin\BrandController@search')->name('exist.brand.search');
//stock route
Route::resource('stock','Admin\StockController');
Route::get('/brand/select/{brand_name}','Admin\StockController@brandSelect');
Route::post('/stock/brand/select','Admin\StockController@stockBrandSelect')->name('stock.brand.select');
Route::post('/stock/search','Admin\StockController@stockSearch')->name('stock.search');
Route::get('/stock/pdf/download/{id}','Admin\StockController@stockPDFdownload')->name('stock.pdf.download');
//commission route
Route::resource('commission','Admin\CommissionController');
//sm_nsm_agm route
Route::resource('sm_nsm_agm','Admin\SMController');
Route::post('/sm_nsm_agm/sale/search','Admin\SMController@saleSearch')->name('sm_nsm_agm.sale.search');
Route::get('/sm_nsm_agm/pending/{id}','Admin\SMController@pending')->name('sm_nsm_agm.pending');
Route::post('/sm_nsm_agm/cancel','Admin\SMController@cancel')->name('sm_nsm_agm.cancel');
//account route
Route::resource('account','Admin\AccountController');
Route::post('/account/sale/search','Admin\AccountController@saleSearch')->name('account.sale.search');
Route::get('/account/pending/{id}','Admin\AccountController@pending')->name('account.pending');
Route::get('/account/cancel','Admin\AccountController@cancel')->name('account.cancel');
//md_ed route
Route::resource('md_ed','Admin\MDController');
Route::post('/md_ed/sale/search','Admin\MDController@saleSearch')->name('md_ed.sale.search');
Route::get('/md_ed/pending/{id}','Admin\MDController@pending')->name('md_ed.pending');
Route::post('/md_ed/cancel','Admin\MDController@cancel')->name('md_ed.cancel');
//warehouse route
Route::resource('warehouse','Admin\WarehouseController');
Route::post('/warehouse/search','Admin\WarehouseController@warehouseSearch')->name('warehouse.search');
//distribution route
Route::resource('distribution','Admin\DistributionController');
Route::get('/distribution/challan/create/{id}','Admin\ChallanController@create')->name('distribution.challan.create');
Route::post('/distribution/search','Admin\DistributionController@search')->name('distributor.search');
//challan route
Route::resource('challan','Admin\ChallanController');
Route::post('/challan/search','Admin\ChallanController@search')->name('challan.search');
Route::get('/additional_challan/details/{id}','Admin\ChallanController@additionalChallanDetails')->name('additional_challan.details');
Route::get('/total_challan/details/{id}','Admin\ChallanController@totalChallanDetails')->name('total_challan.details');
//invoice index
Route::resource('invoice','Admin\InvoiceController');
Route::post('/invoice/search','Admin\InvoiceController@search')->name('invoice.search');
Route::get('/addition_invoice/details/{id}','Admin\InvoiceController@additionInvoiceDetails')->name('additional_invoice.details');
Route::get('/total_invoice/details/{id}','Admin\InvoiceController@totalInvoiceDetails')->name('total_invoice.details');
//approved sale route
Route::resource('approved_sale','Admin\ApprovedSaleController');
Route::post('/approved/sale/search','Admin\ApprovedSaleController@search')->name('approved_sale.search');
Route::get('/approved_challan/details/{id}','Admin\ApprovedSaleController@approvedChallanDetails')->name('approved_challan.details');
Route::get('/approved_additional/challan/details/{id}','Admin\ApprovedSaleController@approvedAdditionalChallanDetails')->name('approved_additional.challan.details');
Route::get('/approved_total/challan/details/{id}','Admin\ApprovedSaleController@approvedTotalChallanDetails')->name('approved_total.challan.details');
Route::get('/approved_invoice/details/{id}','Admin\ApprovedSaleController@approvedInvoiceDetails')->name('approved_invoice.details');
Route::get('/approved_additional/invoice/details/{id}','Admin\ApprovedSaleController@approvedAdditionalInvoiceDetails')->name('approved_additional.invoice.details');
Route::get('/approved_total/invoice/details/{id}','Admin\ApprovedSaleController@approvedTotalInvoiceDetails')->name('approved_total.invoice.details');
//cancel sale route
Route::resource('cancel_sale','Admin\CancelController');
Route::get('/cancel_sale/invoice/{id}','Admin\CancelController@cancelSaleInvoice')->name('cancel_sale.invoice');
Route::get('/cancel_sale/challan/{id}','Admin\CancelController@cancelSaleChallan')->name('cancel_sale.challan');
Route::post('/cancel_sale/search','Admin\CancelController@cancelSaleSearch')->name('cancel_sale.search');
//return route
Route::resource('return','Admin\ReturnController');
//all report route
Route::resource('sale_report','Admin\SaleReportController');
Route::get('/manager/wise/rm/find','Admin\SaleReportController@managerWiseRMFind');
Route::get('/rm/wise/asm/find','Admin\SaleReportController@rmWiseASMFind');
Route::get('/asm/wise/executive/find','Admin\SaleReportController@asmWiseExecutiveFind');
Route::get('/executive/wise/dealer/find','Admin\SaleReportController@executiveWiseDealerFind');
Route::get('/division/wise/district/find','Admin\SaleReportController@divisionWiseDistrictFind');
Route::get('/district/wise/sub_locality/find','Admin\SaleReportController@districtWiseSubLocalityFind');
Route::get('/sub_locality/wise/postal_code/find','Admin\SaleReportController@subLocalityWisePostalCodeFind');
Route::get('/location/wise/report/find','Admin\SaleReportController@locationWiseReportFind');
Route::get('/hierarchy/wise/report/find','Admin\SaleReportController@hierarchyWiseReportFind');
Route::resource('hierarchy_wise_product','Admin\HierarchyWiseProductController');
Route::post('/hierarchy_wise_product/search','Admin\HierarchyWiseProductController@hierarchyWiseProductSearch')->name('hierarchy_wise_product.search');
Route::resource('location_wise_product','Admin\LocationWiseProductController');
Route::post('/location_wise_product/search','Admin\LocationWiseProductController@locationWiseProductSearch')->name('location_wise_product.search');
Route::resource('product_wise_sale','Admin\ProductWiseSaleController');
Route::post('/product_wise_sale/search','Admin\ProductWiseSaleController@productWiseSaleSearch')->name('product_wise_sale.search');
//daily report route
Route::resource('daily_report','Admin\DailyReportController');
Route::post('/daily/report/search','Admin\DailyReportController@dailyReportSearch')->name('daily.report.search');
//role route
Route::resource('role','Admin\RoleController');



