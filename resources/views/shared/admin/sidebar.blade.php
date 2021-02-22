<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-utensils"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Restaurant<sup>&reg;</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{action('DashboardController@index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{action('EmployeesController@employees')}}">
            <i class="fas fa-users"></i>
            <span>Employees</span></a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{action('InvestController@invest')}}">
            <i class="fas fa-dollar-sign"></i>
            <span>Invest</span></a>
    </li>

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{action('ExpenseController@expense')}}">
            <i class="fas fa-upload"></i>
            <span>Expense</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{action('IncomeController@income')}}">
            <i class="fas fa-download"></i>
            <span>Income</span></a>
    </li>

    <hr class="sidebar-divider">
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-utensils"></i>
            <span>Menu</span>
        </a>
        <div id="menu" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="{{action('MenuCategoryController@index')}}">Category</a>
                <a class="collapse-item" href="{{action('MenuController@menu')}}">Menu</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#report" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-chart-line"></i>
            <span>Reports</span>
        </a>
        <div id="report" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Report:</h6>
                <a class="collapse-item" href="{{action('ReportController@expensereport')}}">Expense</a>
                <a class="collapse-item" href="{{action('ReportController@incomereport')}}">Income</a>
                <a class="collapse-item" href="{{action('ReportController@investreport')}}">Invest</a>
            </div>
        </div>
    </li>
    

    
    

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>