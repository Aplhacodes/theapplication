@extends('layouts.display')

	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<h2>This is a list of all products</h2>
	
				{{-- <pre> --}}
				{{-- {{print_r($products, 1)}} --}}
				{{-- </pre> --}}

				<ul class="list-group">
					@foreach($products as $product)
						
						<li class="list-group-item">
							<a href="{{route('ProductDetails', ['id'=>$product['id']])}}">{{$product['name']}}</a>
						</li>

					@endforeach
				</ul><br>
				<a href="{{route('ProductDetails', ['id'=>$product['id']])}}" class="btn btn-secondary">View Product Details</a>
			</div>
		</div>
	</div>
