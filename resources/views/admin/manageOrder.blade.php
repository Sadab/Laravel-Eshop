@extends('admin.layout')

@section('mainsection')

	<br>
	<div class="container">
		
		

		<div class="col-lg-12 mg-t-20 mg-lg-t-0">
			<div class="widget-2">
				<div class="card shadow-base overflow-hidden">
					<div class="card-header">
						<h3 class="text-center">Order LIST</h3>
						
					</div><!-- card-header -->
					<div class="card-body pd-0 bd-color-gray-lighter">
						<div class="row no-gutters tx-center">
							<div class="col-12 pd-y-20 tx-left">
							<table id="datatable1" class="table table-striped text-center table-responsive">
								
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Customer Name</th>
										<th class="text-center">Order Total</th>
										<th class="text-center">status</th>
										<th class="text-center">Actions</th>
										
										
									</tr>
								</thead>
									<?php $no=1 ;?>
								<tbody>
									@foreach($order as $value)
									<tr>
										<td style="vertical-align: middle;">{{ $no++ }}</td>
										<td style="vertical-align: middle;">{{ $value->first_name }}</td>
										<td style="vertical-align: middle;"> {{ $value->order_total}}</td>
										
										

										 <td style="vertical-align: middle">
             			 	

					         			 	@if( $value->order_status == 0)
											

												<p>pending</p>


											@else
											

												<p>paid</p>

											@endif


					         			 </td>

										
										<td style="vertical-align: middle;">

											<a  data-toggle="tooltip-teal " data-placement="top" title="Tooltip on top" style="color:#fff" href="{{route('order.view', ['id'=> $value->order_id])}}" class="btn bg-grandeur btn-icon">
											  <div><i class="fas fa-eye"></i></div> 
											</a>

											<a href="{{route('product.edit', ['id'=> $value->order_id])}}" class="btn btn-primary btn-icon">
											  <div><i class="fas fa-edit"></i></div> 
											</a>

											<a href="{{route('order.delete', ['id'=> $value->order_id])}}" id="delete" class="btn btn-danger btn-icon">
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

	</div>

@endsection