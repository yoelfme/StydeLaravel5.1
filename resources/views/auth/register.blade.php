@extends('layout')

@section('content')
<div class="container-fluid m-t-2">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="card card-default">
				<div class="card-header">Register</div>
				<div class="card-block">
					@include('partials.errors')

					<form class="" role="form" method="POST" action="{{ route('register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<fieldset class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</fieldset>

						<fieldset class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</fieldset>

						<fieldset class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</fieldset>

						<fieldset class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</fieldset>

						<fieldset class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
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
