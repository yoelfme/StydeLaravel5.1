@extends('layout')

@section('content')
<div class="container-fluid m-t-2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">My Account</div>
                <div class="card-block">

                    @include('partials/success')

                    <ul>
                        <li><a href="">Edit Profile</a></li>
                        <li><a href="{{ url('account/password') }}">Change Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection