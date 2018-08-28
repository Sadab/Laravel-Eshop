@extends('admin.layout')


@section('mainsection')

<style>
	
	.btn{
		border-radius:0px;
	}

</style>

<br>
 	<div class="br-section-wrapper">

 		@if(session('message'))
			
			<div class="alert alert-success" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  <strong class="d-block d-sm-inline-block-force"><h4>{{ session('message') }}!</h4></strong>
			</div><!-- alert -->

 		@endif
		
		<h2 class="text-center">Brand List</h2>
		<hr>
		<div class="table table-responsive">
            <table id="datatable1" class="table table-bordered text-center">

             	<thead>
	                <tr>
	                  <th class="wd-15p text-center">Brand No</th>
	                  <th class="wd-15p text-center">Brand Name</th>
	                  <th class="wd-20p text-center">Brand Logo</th>
	                  <th class="wd-20p text-center">Publication status</th>

	                  <th class="wd-15p text-center">
	                  	
	                  	<a class="btn btn-success btn-sm" href="{{ route('brand.create') }}"><i class="fas fa-plus"></i></a>

	                  </th>
	                </tr>
              	</thead>
				<?php $no = 1?>
				
             	<tbody>	
					@foreach($brand as $value)
             		<tr>
             			<td style="vertical-align: middle">{{ $no++ }}</td>
             			<td style="vertical-align: middle">{{ $value->brand_name}}</td>
             			<td style="vertical-align: middle"><img class="img-thumbnail" width="80" height="50"  src="/image/{{ $value->brand_image }}" alt=""></td>
             			<td style="vertical-align: middle"> 
						
							@if( $value->publication_status == 1)

							<span class="btn bg-mantle" style="color:#fff">Active</span>


							@else
							

							<span class="btn bg-flickr" style="color:#fff">Inactive</span>


							@endif

             			 </td>

             			<td style="vertical-align: middle">
							
							@if( $value->publication_status == 1)
								
								<a href="{{ URL::to('/inactive_brand/'.$value->brand_id) }}" class="btn bg-crystal-clear btn-icon" style="color:#fff">
							  <div><i class="far fa-thumbs-up"></i></div> 
							</a>


							@else

							<a href="{{ URL::to('/active_brand/'.$value->brand_id) }}" class="btn bg-firewatch btn-icon" style="color:#fff">
							  <div><i class="far fa-thumbs-down"></i></div> 
							</a>

							@endif
             				


             	
             				<a href="{{route('brand.edit', ['id'=> $value->brand_id])}}" class="btn btn-primary btn-icon">
							  <div><i class="fas fa-edit"></i></div> 
							</a>

							<a href="{{route('brand.delete', ['id'=> $value->brand_id])}}" id="delete" class="btn btn-danger btn-icon">
							  <div><i class="fas fa-trash-alt"></i></div> 
							</a>

             			</td>
             		</tr>
				@endforeach


             	</tbody> 
			</table>
		</div>
	</div>



@endsection