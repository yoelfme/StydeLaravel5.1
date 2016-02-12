@extends('layout')

@section('content')
<div class="container-fluid m-t-2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Edit Profile</div>
                <div class="card-block">
                    @include('partials.errors')

                    <form class="" role="form" method="POST" action="{{ url('account/edit-profile') }}">
                        {!! method_field('PUT') !!}
                        {!! csrf_field() !!}

                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">@lang('validation.attributes.name')</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
