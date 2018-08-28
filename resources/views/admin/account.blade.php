@extends('admin.layout')

@section('mainsection')

	<br>
	<div class="br-section-wrapper">
		
		<h2 class="text-center">Admin Account Information</h2>

		<hr>

		<table class="table table-responsive">

			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Image</th>
				<th>Phone</th>
			</tr>

			<tr>
				<td>{{session('user')->admin_name}}</td>
				<td>{{session('user')->admin_email}}</td>
				<td><img class="img-thumbnail" height="30" width="100" src="/image/{{session('user')->admin_image}}" alt=""></td>
				<td>{{session('user')->admin_phone}}</td>
			</tr>
			
		</table>

	</div>	




@endsection