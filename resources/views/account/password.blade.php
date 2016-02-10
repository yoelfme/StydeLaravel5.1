@extends('layout')

@section('content')
<div class="container-fluid m-t-2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Change your password</div>
                <div class="card-block">
                    <form action="{{ url('account/password') }}" method="POST">
                        
                        {!! csrf_field() !!}

                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">Current Password</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="current_password">
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password">
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">Password Confirmation</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password_confirmation">
                            </div>
                        </fieldset>
                        
                        <fieldset class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button  class="btn btn-primary">Change Password</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection