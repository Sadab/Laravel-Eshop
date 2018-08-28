@extends('admin.layout')


@section('mainsection')
	<br>
	
	@if(session('message1'))
			
			<div class="alert alert-success" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  <strong class="d-block d-sm-inline-block-force"><h4>{{ session('message1') }}!</h4></strong>
			</div><!-- alert -->

 	@endif

 	<style>

	.btn{
		
	}
	.btn:hover{
		outline:none;
	}

</style>

<div class="col-lg-12 mg-t-20 mg-lg-t-0">
			<div class="widget-2">
				<div class="card shadow-base overflow-hidden">
					<div class="card-header">
						<h3 class="text-center">PRODUCT LIST</h3>
						<a href="{{route('product.add')}}" height="40" class="btn bg-crystal-clear " style="color:#fff;"><div><i class="fas fa-plus-square" style="font-size: 15px"></i></div></a>
					</div><!-- card-header -->
					<div class="card-body pd-0 bd-color-gray-lighter">
						<div class="row no-gutters tx-center">
							<div class="col-12 pd-y-20 tx-left">
							<table id="datatable1" class="table table-striped text-center table-responsive">
								
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Name</th>
										<th class="text-center">SKU</th>
										<th class="text-center">Image</th>
										<th class="text-center">Category</th>
										<th class="text-center">Brand</th>
										<th class="text-center">Stock</th>
										<th class="text-center"><i data-toggle="tooltip" title="Featured" class="fas fa-star"></i></th>
										
										<th width="130px" class="text-center">Action</th>
										
									</tr>
								</thead>
									<?php $no=1 ;?>
								<tbody>
									@foreach($product as $value)
									<tr>
										<td style="vertical-align: middle;">{{ $no++ }}</td>
										<td style="vertical-align: middle;">{{ $value->product_name }}</td>
										<td style="vertical-align: middle;"> {{ $value->product_sku}}</td>
										<td style="vertical-align: middle;"> <img class="img-thumbnail" width="80" height="80" src="/image/{{$value->product_image_1}}" alt=""></td>
										<td style="vertical-align: middle;">{{ $value->category_name }}</td>
										<td style="vertical-align: middle;">{{ $value->brand_name }}</td>
										<td  style="vertical-align: middle;"> 
											
											<?php 

												if($value->product_qty != 0)
												{
													?>
													
													<h6 class="text-success">In stock <span class="badge badge-warning">{{ $value->product_qty}}</span></h6>
													
													

													<?php
												}

												else{

													 ?>
															<p class="text-danger">Out of stock</p>
													 <?php
												}

											?>

										</td>

										 <td style="vertical-align: middle">
             			 	

					         			 	@if( $value->product_featured_status == 1)
											

												<a href="{{ URL::to('/feature_inactive_product/'.$value->id) }}"><i data-toggle="tooltip" title="yes" class="fas fa-star"></i></a>


											@else
											

												<a href="{{ URL::to('/feature_active_product/'.$value->id) }}"><i  data-toggle="tooltip" title="no" class="far fa-star"></i></a>

											@endif


					         			 </td>

										
										<td style="vertical-align: middle;">

											<a  data-toggle="tooltip-teal " data-placement="top" title="Tooltip on top" style="color:#fff" href="{{route('product.view', ['id'=> $value->id])}}" class="btn bg-grandeur btn-icon">
											  <div><i class="fas fa-eye"></i></div> 
											</a>

											<a href="{{route('product.edit', ['id'=> $value->id])}}" class="btn btn-primary btn-icon">
											  <div><i class="fas fa-edit"></i></div> 
											</a>

											<a href="{{route('product.delete', ['id'=> $value->id])}}" id="delete" class="btn btn-danger btn-icon">
											  <div><i class="fas fa-trash-alt"></i></div> 
											</a>

										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div><!-- row -->
					</div><!-- card-body -->
					<div class="card-body pd-0">
						<div id="rickshaw2" class="wd-100p ht-150"></div>
					</div><!-- card-body -->
				</div><!-- card -->
			</div><!-- widget-2 -->
		</div><!-- col-6 -->
	</div><!-- row -->


@endsection


