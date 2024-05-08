@extends('layouts.app')

@section('title','Edit Products')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	@include('layouts.partial.msg') 
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					<div class="card w-75 bg-white">
						<div class="card-header border-0" style="font-size: 1.75rem;font-weight: 700;  margin-bottom: 0.5rem; text-align: center;color:#3459FF;background:white;">
							@yield('title')
						</div>
						<div class="w-50 mx-auto">
							<div class="d-flex justify-content-center">
							<img src="https://res.cloudinary.com/dv8zlgkxm/image/upload/v1714876011/Esthyan_wuwlmi.png" alt=""  style="width:50%;" >
							</div>
						</div>
						<form method="POST" action="{{ route('products.update',$product)}}" enctype="multipart/form-data">
                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Name<strong style="color:#3459FF;">(*)</strong></label>
											<input type="text" class="form-control" name="name" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->name }}">
										</div>
                                        <div class="form-group label-floating">
											 <label class="control-label">Description<strong style="color:#3459FF;">(*)</strong></label>
                                             <input type="text" class="form-control" name="description" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->description }}">
                                        <div style="display:flex;justify-content: center;">
                                            
										</div>
                                        <div class="form-group label-floating">
                                        <label class="control-label">Price_Buy <strong style="color:#3459FF;">(*)</strong></label>
											<input type="text" class="form-control" name="price_buy" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->price_buy }}">
										</div>
                                        <div class="form-group label-floating">
                                        <label class="control-label">Price_Sale <strong style="color:#3459FF;">(*)</strong></label>
											<input type="text" class="form-control" name="price_sale" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->price_sale }}">
										</div>
                                        <div class="form-group label-floating">
                                        <label class="control-label">Quantity_in_stock<strong style="color:#3459FF;">(*)</strong></label>
											<input type="text" class="form-control" name="quantity_in_stock" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{$product->quantity_in_stock }}">
										</div>
                                        <div class="form-group label-floating">
                                        <label class="control-label">Expiration_date<strong style="color:#3459FF;">(*)</strong></label>
											<input type="text" class="form-control" name="expiration_date" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->expiration_date }}">
										</div>
                                        <div class="form-group label-floating">
                                        <label class="control-label">Registered By:<strong style="color:#3459FF;">(*)</strong></label>
											<input type="text" class="form-control" name="registeredby" value=" {{ Auth::user()->id}}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Image</label>
											@if ($product->image != null)
                                                <p class="text-center"><img class="img-responsive img-thumbnail" src="{{ asset('uploads/products/'.$product->image) }}" style="height: 70px; width: 70px;" alt=""></p>
                                            @endif
											<input type="file" class="form-control-file" name="image" id="image"  value="{{ $product->image }}">
										</div>
									</div>
								</div>
								<input type="hidden" class="form-control" name="registeredby">
							</div>
							<div class="card-footer">
								<div class="row d-flex justify-content-center">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-block btn-flat rounded" style="background-color: #7F96FF;font-weight: 700;color: black;">Register</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('products.index') }}" class="btn btn-block btn-flat rounded" style=" background-color:#3459FF;border:none;font-weight: 700;color: black;">Back</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection