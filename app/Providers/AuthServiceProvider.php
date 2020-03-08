<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
          Gate::define('all_user','App\Policies\UserPolicy@allUser');
          Gate::define('create_user','App\Policies\UserPolicy@createUser');
          Gate::define('user_details','App\Policies\UserPolicy@details');
          Gate::define('user_edit','App\Policies\UserPolicy@edit');
          Gate::define('user_delete','App\Policies\UserPolicy@delete');


          Gate::define('product_categories','App\Policies\Product_brandPolicy@productCategories');
          Gate::define('add_product_categories','App\Policies\Product_brandPolicy@addProductCategories');
          Gate::define('brands','App\Policies\Product_brandPolicy@brands');
          Gate::define('add_brand','App\Policies\Product_brandPolicy@addBrand');
          Gate::define('product_categories_edit','App\Policies\Product_brandPolicy@productCategoriesEdit');
          Gate::define('product_categories_delete','App\Policies\Product_brandPolicy@productCategoriesDelete');
          Gate::define('brands_edit','App\Policies\Product_brandPolicy@brandsEdit');
          Gate::define('brands_delete','App\Policies\Product_brandPolicy@brandsDelete');



          Gate::define('stock_index','App\Policies\StockPolicy@stockIndex');
          Gate::define('stock_create','App\Policies\StockPolicy@stockCreate');
          Gate::define('stock_details','App\Policies\StockPolicy@details');
          Gate::define('stock_download','App\Policies\StockPolicy@download');
          Gate::define('stock_edit','App\Policies\StockPolicy@edit');
          Gate::define('stock_delete','App\Policies\StockPolicy@delete');


          Gate::define('commission_index','App\Policies\CommissionPolicy@commissionIndex');
          Gate::define('commission_create','App\Policies\CommissionPolicy@commissionCreate');
          Gate::define('commission_edit','App\Policies\CommissionPolicy@edit');
          Gate::define('commission_delete','App\Policies\CommissionPolicy@delete');


          Gate::define('sm_index','App\Policies\SMPolicy@index');

          Gate::define('account_index','App\Policies\AccountPolicy@index');

          Gate::define('md_index','App\Policies\MDPolicy@index');


          Gate::define('stock_status','App\Policies\WarehousePolicy@stockStatus');
          Gate::define('warehouse_edit','App\Policies\WarehousePolicy@edit');
          Gate::define('warehouse_delete','App\Policies\WarehousePolicy@delete');

          Gate::define('distribution_index','App\Policies\DistributionPolicy@index');

          Gate::define('challan_index','App\Policies\ChallanPolicy@index');
          Gate::define('challan_challan','App\Policies\ChallanPolicy@challan');
          Gate::define('challan_additional','App\Policies\ChallanPolicy@additional');
          Gate::define('challan_total','App\Policies\ChallanPolicy@total');
          Gate::define('challan_delete','App\Policies\ChallanPolicy@delete');


          Gate::define('invoice_index','App\Policies\InvoicePolicy@index');
          Gate::define('invoice_invoice','App\Policies\InvoicePolicy@invoice');
          Gate::define('invoice_additional','App\Policies\InvoicePolicy@additional');
          Gate::define('invoice_total','App\Policies\InvoicePolicy@total');
          Gate::define('invoice_delete','App\Policies\InvoicePolicy@delete');


          Gate::define('approved_index','App\Policies\ApprovedPolicy@index');
          Gate::define('approved_challan','App\Policies\ApprovedPolicy@challan');
          Gate::define('approved_additional_challan','App\Policies\ApprovedPolicy@additionalChallan');
          Gate::define('approved_total_challan','App\Policies\ApprovedPolicy@totalChallan');
          Gate::define('approved_invoice','App\Policies\ApprovedPolicy@invoice');
          Gate::define('approved_additional_invoice','App\Policies\ApprovedPolicy@additionalInvoice');
          Gate::define('approved_total_invoice','App\Policies\ApprovedPolicy@totalInvoice');
          Gate::define('approved_delete','App\Policies\ApprovedPolicy@delete');


          Gate::define('cancel_index','App\Policies\CancelPolicy@index');
          Gate::define('cancel_invoice','App\Policies\CancelPolicy@invoice');
          Gate::define('cancel_challan','App\Policies\CancelPolicy@challan');
          Gate::define('cancel_delete','App\Policies\CancelPolicy@delete');


          Gate::define('sale_report','App\Policies\ReportPolicy@saleReport');
          Gate::define('hierarchy_wise_report','App\Policies\ReportPolicy@hierarchyWiseReport');
          Gate::define('location_wise_report','App\Policies\ReportPolicy@locationWiseReport');
          Gate::define('product_wise_report','App\Policies\ReportPolicy@productWiseSale');


          Gate::define('daily_report_index','App\Policies\DailyReportPolicy@index');
          Gate::define('daily_report_delete','App\Policies\DailyReportPolicy@delete');


          Gate::define('role_index','App\Policies\RolePolicy@roleIndex');
          Gate::define('create_role','App\Policies\RolePolicy@createRole');
          Gate::define('role_edit','App\Policies\RolePolicy@edit');
          Gate::define('role_delete','App\Policies\RolePolicy@delete');
    }
}
