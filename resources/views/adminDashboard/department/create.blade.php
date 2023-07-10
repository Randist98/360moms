@extends('adminDashboard.Layout.master')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->

    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo"></div>
                                <div class="profile-photo">
                                    <img src="./assest/images/profile/profile.png" class="img-fluid rounded-circle"
                                        alt="">
                                </div>
                            </div>
                            <div class="profile-info">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="row">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">

                                    <div class="tab-content">
                                        <li class="nav-item">
                                            <a href="#profile-settings" data-toggle="tab" class="nav-link">Add New
                                                Account</a>
                                        </li>

                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form action="{{ route('department.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Department Name</label>
                                                            <input type="text" name="name"
                                                                placeholder="Enter Department Name" class="form-control">
                                                        </div>

                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Add New Department</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endsection
