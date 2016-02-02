@extends('layout')

@section('content')
<div class="container-fluid m-t-2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.success')
            <div class="card card-default">
                <div class="card-header">Login</div>
                <div class="card-block">
                    <p>Welcome to our site!</p> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection