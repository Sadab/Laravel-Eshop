@extends('admin.layout')


@section('mainsection')
	<br>
	
	
	<div class="row row-sm mg-t-20">
		<div class="col-lg-6">
			<div class="widget-2">
				<div class="card shadow-base overflow-hidden">
					<div class="card-header">
						<h6 class="card-title">Customer Detail </h6>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="#" class="btn bg-crystal-clear " style="color:#fff;"></a>
						</div>
					</div><!-- card-header -->
					<div class="card-body pd-0 bd-color-gray-lighter">
						<div class="row tx-center">
							<div class="col-12 pd-y-20 tx-left">
								
								<table class="table table-condensed table-bordered text-center table-striped">
								
								<thead>
									<tr>
										<th class="text-center">UserName</th>
										
										<th class="text-center">Mobile</th>
										
										
									</tr>
								</thead>
									
								<tbody>
								
									<tr>
										<td>{{ $order->first_name}} {{ $order->last_name}}</td>
										<td>{{ $order->telephone}}</td>
										
									</tr>
									
								</tbody>
							</table>
								

							</div><!-- col-4 -->

						</div><!-- row -->
					</div><!-- card-body -->


					<div class="card-body pd-0">
						<div id="rickshaw1" class="wd-100p ht-150 rounded-bottom"></div>
					</div><!-- card-body -->
				</div><!-- card -->
			</div><!-- widget-2 -->
		</div><!-- col-6 -->
		<div class="col-lg-6 mg-t-20 mg-lg-t-0">
			<div class="widget-2">
				<div class="card shadow-base overflow-hidden">
					<div class="card-header">
						<h6 class="card-title">Shipping Detail</h6>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="#" class="btn bg-crystal-clear " style="color:#fff;"></a>
						</div>
					</div><!-- card-header -->
					<div class="card-body pd-0 bd-color-gray-lighter">
						<div class="row no-gutters tx-center">
							<div class="col-12 pd-y-20 tx-left">
							<table class="table table-condensed table-bordered text-center table-striped">
								
								<thead>
									<tr>
										<th class="text-center">UserName</th>
										<th class="text-center">Address</th>
										<th class="text-center">Email</th>
										<th class="text-center">Mobile</th>
										
										
									</tr>
								</thead>
									
								<tbody>
								
									<tr>
										<td>{{ $order->shipping_first_name}} {{ $order->shipping_last_name}}</td>
										<td>{{ $order->shipping_address}}</td>
										<td>{{ $order->shipping_email}}</td>
										<td>{{ $order->shipping_telephone}}</td>
									</tr>
									
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
		<br>
<br>


	</div><!-- row -->


          <div class="col-lg-12">
            <div class="card shadow-base">

            	<div>

            	<h2 class="text-center">Order Details</h2>
            	<hr>

            	<table class="table table-bordered table-orange">

            		<thead class="thead-colored thead-info">
            			
            		
	            		<tr>
	            			<th>Order Id</th>
	            			<th>Product Name</th>
	            			<th>product price</th>
	            			<th>product sale Quantity</th>
	            			<th>product sub total</th>
	            		</tr>
					</thead>

					<tbody>

							<tr>

	            			<td>{{$order->order_id}}</td>
	            			<td>{{$order->product_name}}</td>
	            			<td>{{$order->product_price}}</td>
	            			<td>{{$order->product_sales_quantity}}</td>
	            			<td>{{$order->order_total}}</td>
	            		</tr>


	            		
						

					</tbody>	
	            	

            	</table>
             </div>
            </div><!-- card -->


          </div><!-- col-4 -->
       



@endsection

