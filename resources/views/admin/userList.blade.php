@extends('admin.layout')


@section('mainsection')

<style>
	
	.btn{
		border-radius:0px;
	}

</style>

<br>

 	<div class="br-section-wrapper">

 		<div class="br-section-wrapper">

 		@if(session('message'))
			
			<div class="alert alert-success" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  <strong class="d-block d-sm-inline-block-force"><h4>{{ session('message') }}!</h4></strong>
			</div><!-- alert -->

 		@endif
		
		<h2 class="text-center">Customer List</h2>
		<hr>
		
            <table id="datatable1" class="table table-condensed table-responsive text-center">

             	<thead>
	                <tr>
	                  <th style="vertical-align: middle" class="text-center">User No</th>
	                  <th style="vertical-align: middle"  class="text-center">User Name</th>
	                  <th style="vertical-align: middle" class="text-center">User Email</th>
	                  <th style="vertical-align: middle" class="text-center">User Phone</th>

	                  <th style="vertical-align: middle"  class="text-center">Action </th>
	                </tr>
              	</thead>
				<?php $no = 1?>
				
             	<tbody>	
					@foreach($user as $value)
             		<tr>
             			<td>{{ $no++ }}</td>
             			<td>{{ $value->first_name}} {{ $value->last_name}}</td>
             			<td>{{ $value->email_address}} </td>

             			 <td style="vertical-align: middle">{{ $value->telephone}}</td>

             			<td>
             				<a href="{{route('user.delete', ['id'=> $value->customer_id])}}" id="delete" class="btn btn-danger btn-icon">
							  <div><i class="fas fa-trash-alt"></i></div> 
							</a>

             			</td>
             		</tr>
				@endforeach


             	</tbody> 
			</table>
		
	</div>



@endsection