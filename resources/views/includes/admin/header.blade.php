<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img src="{{ asset('img/user.jpg') }} alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/admin/home')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="{{ url('/admin/calendar')}}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Calendar</a>
                    </div>
                    <a href="{{ url('/admin/employee')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Employee</a>
                    <a href="{{ url('/admin/product')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Product</a>
                    <a href="{{ url('/admin/workings')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Workings</a>
                    <a href="{{ url('/admin/history')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>History</a>
                    <a href="{{ url('/admin/process')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Process</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->