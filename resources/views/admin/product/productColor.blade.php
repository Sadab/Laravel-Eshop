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
	
	<div class="row row-sm mg-t-20">
		<div class="col-lg-5">
			<div class="widget-2">
				<div class="card shadow-base overflow-hidden">
					<div class="card-header">
						<h6 class="card-title">Product color </h6>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="#" class="btn bg-crystal-clear " style="color:#fff;">ADD PRODUCT COLOR HERE</a>
						</div>
					</div><!-- card-header -->
					<div class="card-body pd-0 bd-color-gray-lighter">
						<div class="row tx-center">
							<div class="col-12 pd-y-20 tx-left">

								<form method="post">
									{{ csrf_field() }}
									<div class="col-xl-12">
										<div class="form-layout form-layout-4">

											<div class="row">
												<label class="col-sm-4 form-control-label">color Name: <span class="tx-danger">*</span></label>
												<div class="col-sm-8 mg-t-10 mg-sm-t-0">
													<input type="text" class="form-control" name="color_name" placeholder="Enter color name">

												</div>
											</div><!-- row -->

											<br>

											<div class="row">
												<label class="col-sm-4 form-control-label">Pick color : <span class="tx-danger">*</span></label>
												<div class="col-sm-8 mg-t-10 mg-sm-t-0">
													<input type="color" name="color_code" >

												</div>
											</div><!-- row -->

											<br>
											<div class="row">
												<label class="col-sm-2 form-control-label ckbox-success"><span class="tx-danger"></span></label>
												<div class="col-sm-9 mg-t-10 mg-sm-t-0">

													@if($errors->any())
													<ul style="list-style:none">
														@foreach($errors->all() as $err)
														<li style="color:red">*{{$err}}</li>
														@endforeach
													</ul>
													@endif


													@if(session('message'))

													<ul style="list-style: none">

														<li class="text-danger">*{{session('message')}}</li>

													</ul>


													@endif

												</div>
											</div>


											<div class="form-layout-footer mg-t-30">
												<button type="submit" style="cursor:pointer;font-size:13px" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
												

											</div><!-- form-layout-footer -->

										</div><!-- form-layout -->
									</div><!-- col-6 -->
								</form>

							</div><!-- col-4 -->

						</div><!-- row -->
					</div><!-- card-body -->


					<div class="card-body pd-0">
						<div id="rickshaw1" class="wd-100p ht-150 rounded-bottom"></div>
					</div><!-- card-body -->
				</div><!-- card -->
			</div><!-- widget-2 -->
		</div><!-- col-6 -->
		<div class="col-lg-7 mg-t-20 mg-lg-t-0">
			<div class="widget-2">
				<div class="card shadow-base overflow-hidden">
					<div class="card-header">
						<h6 class="card-title">Color List</h6>
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="#" class="btn bg-crystal-clear " style="color:#fff;">PRODUCT COLOR LIST</a>
						</div>
					</div><!-- card-header -->
					<div class="card-body pd-0 bd-color-gray-lighter">
						<div class="row no-gutters tx-center">
							<div class="col-12 pd-y-20 tx-left">
							<table id="datatable1" class="table table-condensed table-bordered text-center table-striped">
								
								<thead>
									<tr>
										<th class="text-center">Color Id</th>
										<th class="text-center">Color Name</th>
										<th class="text-center">Color Code</th>
										<th class="text-center">Action</th>
										
									</tr>
								</thead>
									<?php $no=1 ;?>
								<tbody>
									@foreach($color as $value)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $value->color_name }}</td>
										<td> <input type="color" value="{{ $value->color_code}}"></td>
										<td>
											
											<a href="{{route('color.edit', ['id'=> $value->id])}}" class="btn btn-primary btn-icon">
											  <div><i class="fas fa-edit"></i></div> 
											</a>

											<a href="{{route('color.delete', ['id'=> $value->id])}}" id="delete" class="btn btn-danger btn-icon">
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

