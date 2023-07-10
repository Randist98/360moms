<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="./assest/images/favicon.png">
    <link href="./assest/css/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/favicon.png') }}">
<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./asset/images/logo.png" alt="">
                <img class="logo-compact" src="./asset/images/logo-text.png" alt="">
                <img class="brand-title" src="./asset/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0" style="display: flex; align-items: center; justify-content: center; padding: 10px;">
                                    <form action="{{ route('adminDashboard.employee.index') }}" method="GET">
                                        @csrf
                                        <div class="input-group" style="position: relative; width: 100%;">
                                            <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search" style="padding-right: 80px;">
                                            <button class="btn btn-primary" type="submit" style="position: absolute; top: 0; right: 0; bottom: 0; width: 80px;">Search</button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                        unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    {{-- <li>
                        <a href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chart-line"></i><span class="nav-text">Dashboard</span></a>
                    </li> --}}

                    <li>
                        <a href="{{Route('employeeTable.index')}}" aria-expanded="false">
                            <i class="fas fa-briefcase"></i><span class="nav-text">Employee</span></a>
                    </li>

                    <li>
                        <a href="{{Route('departmentTable.index')}}" aria-expanded="false">
                            <i class="fas fa-user-friends"></i><span class="nav-text">Departments</span></a>
                    </li>


                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->



     {{-- Content body start
        ***********************************--> --}}
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="font-size: 20px"> Employee Table</h4>
                               <a href="{{route('employeeTable.create')}}"> <button class="my-button" >Add</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Email</th>
                                                {{-- <th scope="col">Password</th> --}}
                                                <th scope="col">Gender</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee )

                                            <tr>
                                                <td>{{$employee->firstName}}</td>
                                                <td>
                                                    {{$employee->lastName}}
                                                </td>
                                                <td> {{$employee->email}}</td>
                                                {{-- <td>
                                                    {{$employee->password}}
                                                </td> --}}
                                                <td>
                                                    {{$employee->gender}}
                                                </td>

                                                <td>
                                                    {{$employee->department ? $employee->department->name : 'N/A'}}
                                                </td>

                                                <td style="width: 100px" >
                                                    @if($employee->image)
                                                    <img  src="{{ asset('images/'. $employee->image) }}" alt="Office Image" class="img-thumbnail" style="width: 100px;">
                                                    @else
                                                    <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                                                    @endif
                                                </td>

                                                <td style="width: 130px">

                                                    <form method="POST" action="{{ route('employeeTable.destroy', $employee->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button style="background-color: white; color: red; border: none; width: 40px; height:40px;" type="submit" class="btn btn-danger btn-lg" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('employeeTable.edit', $employee->id) }}" title="Edit Office">
                                                       <button style="background-color: white; color: blue; border: none; width: 40px; height:40px;" class="btn btn-primary btn-lg"> <i class="fas fa-edit" style="color: blue"></i></button>
                                                    </a>

                                                    <a href="{{ route('employeeTable.show', $employee->id) }}" title="View Profile">
                                                        <button style="background-color: white; color: green; border: none; width: 40px; height:40px;" class="btn btn-success btn-lg">
                                                            <i class="fas fa-eye" style="color: green"></i>
                                                        </button>
                                                    </a>
                                                </td>



                                            </tr>
                                            <tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    {{-- <script src="./assest/vendor/global/global.min.js"></script>
    <script src="./assest/js/quixnav-init.js"></script>
    <script src="./assest/js/custom.min.js"></script> --}}

    <script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('asset/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('asset/js/custom.min.js') }}"></script>


</body>

</html>

