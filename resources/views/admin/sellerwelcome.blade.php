<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('laraecomm/adminAssets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            .active{
                color:#fff;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('dashboard')}}">GREEN SHOP BD</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><button class="dropdown-item" onclick="logout()">Logout</button></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav" style="margin-bottom:70px;">
                            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                            <a class="nav-link {{('laraecomm/admin/main_dashboard' === request()->path())? 'active' : ''}}" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Order Management</div>
                            <a class="nav-link collapsed {{ ('laraecomm/admin/order' === substr(request()->path(),0,21))? 'active' : ''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns "></i></div>
                                Order Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{ ('laraecomm/admin/order/pending' === request()->path())? 'active' : ''}}" href="{{route('pending')}}">Pending Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/processingorder' === request()->path())? 'active' : ''}}" href="{{route('processingorder')}}">Processing Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/curiar' === request()->path())? 'active' : ''}}" href="{{route('curiar')}}">Curiar Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/complete' === request()->path())? 'active' : ''}}" href="{{route('complete')}}">Completed Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/cancel' === request()->path())? 'active' : ''}}" href="{{route('cancel')}}">Cancel Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/exchange' === request()->path())? 'active' : ''}}" href="{{route('exchange')}}">Exchange Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/allorder' === request()->path())? 'active' : ''}}" href="{{route('allorder')}}">All Order</a>
                                    <a class="nav-link {{ ('laraecomm/admin/order/refund' === request()->path())? 'active' : ''}}" href="{{route('refund')}}">Refund Order</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Product Management</div>
                            <a class="nav-link collapsed {{ ('laraecomm/admin/product' === substr(request()->path(),0,23))? 'active' : ''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                                <div class="sb-nav-link-icon"><i class="fas fa-bell "></i></div>
                                Product Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{ ('laraecomm/admin/product/addnew' === request()->path())? 'active' : ''}}" href="{{route('addnew')}}">Add New Product</a>
                                    <a class="nav-link {{ ('laraecomm/admin/product/addvirtual' === request()->path())? 'active' : ''}}" href="{{route('addvirtual')}}">Add Virtual Product</a>
                                    <a class="nav-link {{ ('laraecomm/admin/product/pendingproducts' === request()->path())? 'active' : ''}}" href="{{route('pendingproducts')}}">Pending Products</a>
                                    <a class="nav-link {{ ('laraecomm/admin/product/allproducts' === request()->path())? 'active' : ''}}" href="{{route('allproducts')}}">All Products</a>
                                    <a class="nav-link {{ ('laraecomm/admin/product/recentproducts' === request()->path())? 'active' : ''}}" href="{{route('recentproducts')}}">Recent Products</a>
                                    <a class="nav-link {{ ('laraecomm/admin/product/brand' === request()->path())? 'active' : ''}}" href="{{route('brand')}}">Brand</a>
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">User Management</div>
                            <a class="nav-link collapsed {{ ('laraecomm/admin/manage' === substr(request()->path(),0,22))? 'active' : ''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                                <div class="sb-nav-link-icon"><i class="fas fa-user "></i></div>
                                User Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{ ('laraecomm/admin/manage/adminlist' === request()->path())? 'active' : ''}}" href="{{route('admin')}}">Admin</a>
                                    <a class="nav-link {{ ('laraecomm/admin/manage/seller' === request()->path())? 'active' : ''}}" href="{{route('seller')}}">Seller</a>
                                    <a class="nav-link {{ ('laraecomm/admin/manage/user' === request()->path())? 'active' : ''}}" href="{{route('user')}}">User</a>
                                </nav>
                            </div>
                            

                            <div class="sb-sidenav-menu-heading">Site Management</div>
                            <a class="nav-link collapsed {{ ('laraecomm/admin/setting' === substr(request()->path(),0,23))? 'active' : ''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_site" aria-expanded="false" aria-controls="collapseLayouts_site">
                                <div class="sb-nav-link-icon"><i class="fas fa-user "></i></div>
                                Site Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts_site" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{ ('laraecomm/admin/setting/affiliate' === request()->path())? 'active' : ''}}" href="{{route('affiliate')}}">Affiliate</a>
                                </nav>
                            </div>





                            <div class="sb-sidenav-menu-heading">Getway Management</div>
                            <a class="nav-link collapsed {{ ('laraecomm/admin/Gateway' === substr(request()->path(),0,23))? 'active' : ''}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-check-alt "></i></div>
                                Getway Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{ ('laraecomm/admin/Gateway/cash' === request()->path())? 'active' : ''}}" href="{{route('cash')}}">Cash On Delivery</a>
                                    <a class="nav-link {{ ('laraecomm/admin/Gateway/mobile' === request()->path())? 'active' : ''}}" href="{{route('mobile')}}">Cash Out</a>
                                    <a class="nav-link {{ ('laraecomm/admin/Gateway/bank' === request()->path())? 'active' : ''}}" href="{{route('bank')}}">Bank Payment</a>
                                    <a class="nav-link {{ ('laraecomm/admin/Gateway/emipayment' === request()->path())? 'active' : ''}}" href="{{route('emipayment')}}">EMI Payment</a>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    {{-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div> --}}
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('main_content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            let check = localStorage.getItem('token');
            if (!check) {
                window.location.href="{{route('login')}}";
            }
            function logout() {
                localStorage.setItem('token','');
                window.location.href="{{route('sellerlogin')}}";
            }             
            $(document).ready(function() {

            });
        </script>
    </body>
</html>