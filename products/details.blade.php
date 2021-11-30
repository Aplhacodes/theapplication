@extends('layouts.display')




	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
					<!-- <pre>
					{{print_r($details),1}}
				</pre>
				 -->
				 <h4>This is the product details</h4>
				 <ul class="list-group">
				 @foreach($details as $key => $value)

				 <a href="{{url('/products')}}"><li class="list-group-item">{{$key}} - {{$value}}</li></a>

				 @endforeach

				</ul><br>
				<a href="{{route('ProductList')}}" class="btn btn-primary">Product List</a>
			</div>
		</div>
	</div>
