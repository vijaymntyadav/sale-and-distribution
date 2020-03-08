<ul class="sidebar-menu" data-widget="tree">
    <li class="header text-center">Navigation Option</li>
    @if(Gate::check('all_user') || Gate::check('create_user'))
    <li class="treeview @yield('user')">
        <a href="#">
            <i class="fa fa-users"></i><span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @can('all_user',Auth::user())
            <li class="@yield('all_user')"><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>All User</a></li>
            @endcan
            @can('create_user',Auth::user())
            <li class="@yield('create_user')"><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i>Create User</a></li>
            @endcan
        </ul>
    </li>
    @endif
    @if(Gate::check('product_categories') || Gate::check('add_product_categories') || Gate::check('brands') || Gate::check('add_brand'))
    <li class="treeview @yield('product')">
        <a href="#">
            <i class="fa fa-product-hunt"></i> <span>Product & Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @can('product_categories',Auth::user())
            <li class="@yield('product_categories')"><a href="{{route('product_category.index')}}"><i class="fa fa-circle-o"></i>Product Categories</a></li>
            @endcan
            @can('add_product_categories',Auth::user())
            <li class="@yield('add_product_categories')"><a href="{{route('product_category.create')}}"><i class="fa fa-circle-o"></i>Add Product Categories</a></li>
            @endcan
            @can('brands',Auth::user())
            <li class="@yield('brand_index')"><a href="{{route('brand.index')}}"><i class="fa fa-circle-o"></i>Brands</a></li>
            @endcan
            @can('add_brand',Auth::user())
            <li class="@yield('brand_create')"><a href="{{route('brand.create')}}"><i class="fa fa-circle-o"></i>Add Brand</a></li>
            @endcan
        </ul>
    </li>
    @endif
    @if(Gate::check('stock_index') || Gate::check('stock_create'))
    <li class="treeview @yield('stock')">
        <a href="#">
            <i class="fa fa-boxes"></i> <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @can('stock_index',Auth::user())
            <li class="@yield('stock_in')"><a href="{{route('stock.index')}}"><i class="fa fa-circle-o"></i>Stock Index</a></li>
            @endcan
            @can('stock_create',Auth::user())
            <li class="@yield('stock_create')"><a href="{{route('stock.create')}}"><i class="fa fa-circle-o"></i>Stock Create</a></li>
            @endcan
        </ul>
    </li>
    @endif
    @if(Gate::check('commission_index') || Gate::check('commission_create'))
    <li class="treeview @yield('commission')">
        <a href="#">
            <i class="fas fa-percentage"></i> <span>Commission</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @can('commission_index',Auth::user())
           <li class="@yield('commission_index')"><a href="{{route('commission.index')}}"><i class="fa fa-circle-o"></i>Commission Index</a></li>
            @endcan
            @can('commission_create',Auth::user())
           <li class="@yield('commission_create')"><a href="{{route('commission.create')}}"><i class="fa fa-circle-o"></i>Commission Create</a></li>
            @endcan
        </ul>
    </li>
    @endif
    @can('sm_index',Auth::user())
    <li class="treeview @yield('sm_nsm_agm')">
        <a href="#">
            <i class="fab fa-shirtsinbulk"></i> <span>SM/NSM/AGM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
           <li class="@yield('sm_nsm_agm.index')"><a href="{{route('sm_nsm_agm.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    @can('account_index',Auth::user())
    <li class="treeview @yield('account')">
        <a href="#">
            <i class="fab fa-adn"></i> <span>Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('account.index')"><a href="{{route('account.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    @can('md_index',Auth::user())
        <li class="treeview @yield('md_ed')">
            <a href="#">
                <i class="fas fa-anchor"></i> <span>MD/Ed</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="@yield('md_ed.index')"><a href="{{route('md_ed.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
            </ul>
        </li>
    @endcan
    @can('stock_status',Auth::user())
    <li class="treeview @yield('warehouse')">
        <a href="#">
            <i class="fa fa-warehouse"></i>  <span>Warehouse</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('stock_status')"><a href="{{route('warehouse.index')}}"><i class="fa fa-circle-o"></i>Stock Status</a></li>
        </ul>
    </li>
    @endcan
    @can('distribution_index',Auth::user())
    <li class="treeview @yield('distribution')">
        <a href="#">
            <i class="fas fa-shipping-fast"></i> <span>Distribution</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('distribution.index')"><a href="{{route('distribution.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    @can('challan_index',Auth::user())
    <li class="treeview @yield('challan')">
        <a href="#">
            <i class="fab fa-cuttlefish"></i> <span>Challan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('challan_index')"><a href="{{route('challan.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endif
    @can('invoice_index',Auth::user())
    <li class="treeview @yield('invoice')">
        <a href="#">
            <i class="fa fa-file-invoice-dollar"></i> <span>Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('invoice_index')"><a href="{{route('invoice.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    @can('approved_index',Auth::user())
    <li class="treeview @yield('approved_sale')">
        <a href="#">
            <i class="fas fa-thumbs-up"></i> <span>Approved Sale</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('approved_sale')"><a href="{{route('approved_sale.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    @can('cancel_index',Auth::user())
    <li class="treeview @yield('cancel')">
        <a href="#">
            <i class="fas fa-thumbs-down"></i> <span>Cancel Sale</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('cancel_index')"><a href="{{route('cancel_sale.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    <li class="treeview @yield('return')">
        <a href="#">
            <i class="fas fa-exchange-alt"></i><span>Return</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('return_index')"><a href="{{route('return.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
            <li class="@yield('return_index')"><a href="{{route('return.index')}}"><i class="fa fa-circle-o"></i>Damage</a></li>
        </ul>
    </li>
    @if(Gate::check('sale_report') || Gate::check('hierarchy_wise_report') || Gate::check('location_wise_report') || Gate::check('product_wise_report'))
        <li class="treeview @yield('report')">
            <a href="#">
                <i class="far fa-window-restore"></i> <span>Report</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                @can('sale_report',Auth::user())
                    <li class="@yield('sale_report.index')"><a href="{{route('sale_report.index')}}"><i class="fa fa-circle-o"></i>Sale Report</a></li>
                @endcan
                @can('hierarchy_wise_report',Auth::user())
                    <li class="@yield('hierarchy_wise_product.index')"><a href="{{route('hierarchy_wise_product.index')}}"><i class="fa fa-circle-o"></i>Hierarchy Wise Product </a></li>
                @endcan
                @can('location_wise_report',Auth::user())
                    <li class="@yield('location_wise_product.index')"><a href="{{route('location_wise_product.index')}}"><i class="fa fa-circle-o"></i>Location Wise Product</a></li>
                @endcan
                @can('product_wise_report',Auth::user())
                    <li class="@yield('product_wise_sale.index')"><a href="{{route('product_wise_sale.index')}}"><i class="fa fa-circle-o"></i>Product Wise Sale</a></li>
                @endcan
            </ul>
        </li>
    @endif
    @can('daily_report_index',Auth::user())
    <li class="treeview @yield('daily_report')">
        <a href="#">
            <i class="fa fa-clipboard-list"></i><span>Daily Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="@yield('daily_report.index')"><a href="{{route('daily_report.index')}}"><i class="fa fa-circle-o"></i>Index</a></li>
        </ul>
    </li>
    @endcan
    @if(Gate::check('role_index') || Gate::check('create_role'))
    <li class="treeview @yield('role')">
        <a href="#">
            <i class="fas fa-user-tag"></i> <span>Role</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @can('role_index',Auth::user())
            <li class="@yield('role_index')"><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>Role Index</a></li>
            @endcan
            @can('create_role',Auth::user())
            <li class="@yield('create_role')"><a href="{{route('role.create')}}"><i class="fa fa-circle-o"></i>Create Role</a></li>
            @endcan
        </ul>
    </li>
    @endif
</ul>
