@extends('layouts.display')


{{-- @section('content') --}}

	<div class="container">
		<div class="row justify-content-center m-2">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body p-5">
						<h2 align="center">Page not found</h2>
						<div class="mt-3">
							<img src="{{asset('images/error.gif')}}" class="img-fluid">
						</div>
						<p align="center"><button class="btn btn-danger btn-lg mt-2">Home</button></p>
					</div>
				</div>
			</div>
		</div>
	</div>

{{-- @endsection --}}