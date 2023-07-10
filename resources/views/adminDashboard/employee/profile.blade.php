@extends('adminDashboard.Layout.master')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">


        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="profile-photo">
                                <img src="{{ asset('images/'.$employee->image) }}" class="img-fluid rounded-circle" alt="">
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
                <div class="card" style="margin-top: 90px">
                    <div class="card-body" >


                        <div class="profile-interest mt-4 pb-2 border-bottom-1" >
                            <h5 class="text-primary d-inline">Employee Information</h5>
                        </div>
                        <div class="profile-news mt-4 pb-3">

                            <div class="media pt-3 pb-3">

                                <div class="media-body">
                                    <h3 class="m-b-5">First Name</h3>
                                    <h5>{{ $employee->firstName }}</h5>
                                </div>
                            </div>

                            <hr>

                            <div class="media pt-3 pb-3">

                                <div class="media-body">
                                    <h3 class="m-b-5">Last Name</h3>
                                    <h5>{{ $employee->lastName }}</h5>
                                </div>
                            </div>

                            <hr>

                            <div class="media pt-3 pb-3">

                                <div class="media-body">
                                    <h3 class="m-b-5">Email</h3>
                                    <h5>{{ $employee->email }}</h5>
                                </div>
                            </div>

                            <hr>

                            <div class="media pt-3 pb-3">

                                <div class="media-body">
                                    <h3 class="m-b-5">Gender</h3>
                                    <h5>{{ $employee->gender }}</h5>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
