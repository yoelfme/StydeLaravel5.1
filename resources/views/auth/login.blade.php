@extends('layout')

@section('content')
<div class="container-fluid m-t-2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">@lang('auth.login_title')</div>
                <div class="card-block">
                    
                    @include('partials.errors')

                    <form class="" role="form" method="POST" action="{{ route('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">@lang('validation.attributes.username')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">@lang('validation.attributes.password')</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">@lang('auth.remember')
                                    </label>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                                    @lang('auth.login_button')
                                </button>
                                <br>
                                <a href="/password/email">@lang('auth.forgot_link')</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection