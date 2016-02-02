@extends('layout')

@section('content')
    <div class="container-fluid m-t-2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">New Post</div>
                <div class="card-block">
                    <form class="" role="form" method="POST" action="{{ url('publish') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <label class="col-md-4 control-label">Post</label>
                            <div class="col-md-6">
                                <textarea name="post" class="form-control" cols="30" rows="3">{{ old('post')}}</textarea>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create post
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