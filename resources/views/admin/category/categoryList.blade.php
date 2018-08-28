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
		
		<h2 class="text-center">Category List</h2>
		<hr>
		
            <table id="datatable1" class="table table-condensed table-responsive text-center">

             	<thead>
	                <tr>
	                  <th style="vertical-align: middle" class="text-center">Category No</th>
	                  <th style="vertical-align: middle"  class="text-center">Category Name</th>
	                  <th style="vertical-align: middle" class="text-center">Publication status</th>
	                  <th style="vertical-align: middle" class="text-center"><i data-toggle="tooltip" title="Featured" class="fas fa-star"></i></th>

	                  <th style="vertical-align: middle"  class="text-center">
	                  	
	                  	<a class="btn btn-success btn-sm" href="{{ route('category.create') }}"><i class="fas fa-plus"></i></a>

	                  </th>
	                </tr>
              	</thead>
				<?php $no = 1?>
				
             	<tbody>	
					@foreach($category as $value)
             		<tr>
             			<td>{{ $no++ }}</td>
             			<td>
             				@if($value->parent_id != NULL)

             				{{$value->category_name}} (subcategory)

             				@else
             				
             				{{ $value->category_name}}


             				@endif


             			</td>
             			<td> 
						
							@if( $value->publication_status == 1)

							<span class="btn bg-mantle" style="color:#fff">Active</span>


							@else
							

							<span class="btn bg-flickr" style="color:#fff">Inactive</span>


							@endif

             			 </td>

             			 <td style="vertical-align: middle">
             			 	

             			 	@if( $value->featured_status == 1)
							

								<a href="{{ URL::to('/feature_inactive_category/'.$value->category_id) }}"><i data-toggle="tooltip" title="yes" class="fas fa-star"></i></a>


							@else
							

								<a href="{{ URL::to('/feature_active_category/'.$value->category_id) }}"><i  data-toggle="tooltip" title="No" class="far fa-star"></i></a>

							@endif


             			 </td>

             			<td>
							
							@if( $value->publication_status == 1)
								
								<a href="{{ URL::to('/inactive_category/'.$value->category_id) }}" class="btn  bg-firewatch btn-icon" style="color:#fff">
							  <div><i class="far fa-thumbs-down"></i></div> 
							</a>


							@else

							<a href="{{ URL::to('/active_category/'.$value->category_id) }}" class="btn bg-crystal-clear btn-icon" style="color:#fff">
							  <div><i class="far fa-thumbs-up"></i></div> 
							</a>

							@endif
             				


             	
             				<a href="{{route('category.edit', ['id'=> $value->category_id])}}" class="btn btn-primary btn-icon">
							  <div><i class="fas fa-edit"></i></div> 
							</a>

							<a href="{{route('category.delete', ['id'=> $value->category_id])}}" id="delete" class="btn btn-danger btn-icon">
							  <div><i class="fas fa-trash-alt"></i></div> 
							</a>

             			</td>
             		</tr>
				@endforeach


             	</tbody> 
			</table>
		
	</div>



@endsection