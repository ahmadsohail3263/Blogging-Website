
@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <br><br>
                    <center>
                        <img class="rounded-circle avatar-xl" src="{{ (!empty($admin_data->profile_image))? url('uploads/admin_images/'.$admin_data->profile_image) : url('uploads/no_image.jpg') }}" alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title">Name : {{ $admin_data->name }}</h4>
                        <hr>
                        <h4 class="card-title">User Name : {{ $admin_data->username }}</h4>
                        <hr>
                        <h4 class="card-title">Email : {{ $admin_data->email }}</h4>
                        <hr>
                        <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>


@endsection