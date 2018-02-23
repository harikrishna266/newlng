<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>LNG</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mat.css') }}" rel="stylesheet">
        <link href="{{ asset('css/scroll.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="//cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="css/material-icons.css">
    </head>
    <body>
        <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        LNG
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field ml-4 d-none d-md-block">
          
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached mr-2 text-success"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-logout mr-2 text-primary"></i>
                        Signout
                    </a>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-power"></i>
                </a>
            </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <div class="row row-offcanvas row-offcanvas-right">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/students">
                            <span class="menu-title">Student</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/programs">
                            <span class="menu-title">Program</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sessions">
                            <span class="menu-title">sessions</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="content-wrapper">
            @yield('content')
            </div>
        </div>  
    </div>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
</body>

</html>


