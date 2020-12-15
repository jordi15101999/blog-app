<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | {{ Auth::user()->name }}</title>
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/sb-admin/css/sb-admin-2.css" rel="stylesheet">
    {{-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"> --}}
    {{-- <style>
        .label-success {
        background-color: #4fca6b;
        display: inline-block;
        width: 100%;
        color: #fff;
        padding: 8px 15px;
      }
      .label-success h4 {
        margin-bottom: 0;
      }
    </style> --}}

    <style>
        .form-create {
            background-color: white;
            font-weight: bold;
            margin-bottom:30px;
        }
        .form-edit {
            background-color: white;
            font-weight: bold;
            margin-bottom:30px;
        }
        .form-control{
            border-radius: 0;
            border: 1px solid black;
        }
        .form-control:focus {
            outline: none;
            box-shadow: none;
            border: 1px solid black;
        }

        .form-control-file {
            border: 1px solid white;
        }

        .table > tbody > tr > * {
            vertical-align: middle;
        }

        .page-link {
            cursor: pointer;
        }

        #nav-atas li {
            padding: 0 10px !important;
            font-size: 16px;
        }
    </style>
    
    
</head>

<body id="page-top">

    {{-- Vue JS --}}
    <div id="app">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <Menuadmin :user-id="@json(auth()->user()->id)"></Menuadmin>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        {{-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->email }}</span>
                                <img class="img-profile rounded-circle"
                                    src="/img/logo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li> --}}
                        <li class="d-flex">
                            <span class="mr-2 d-none d-lg-flex align-self-center text-gray-800" style="font-size:12px;">{{ Auth::user()->email }}</span>
                            <a class="btn btn-sm btn-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

               
            <div class="container-fluid">
    
                <router-view></router-view>

                
                
            </div>

            </div>
            <!-- End of Main Content -->





            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Johannes Jordi 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    </div>
    {{-- End of Vue JS --}}
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{ asset('/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/sb-admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('/sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/sb-admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    

    <!-- Page level custom scripts -->
    {{-- <script src="/sb-admin/js/demo/chart-area-demo.js"></script>
    <script src="/sb-admin/js/demo/chart-pie-demo.js"></script> --}}

</body>

</html>