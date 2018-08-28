@extends('admin.layout')

@section('mainsection')

	<br>
	<div class="br-section-wrapper">
		
		<h2 class="text-center">Edit profile</h2>

		<hr>



			<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			 <div class="col-xl-12" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                
                <div class="row">
                  <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="admin_name" value="{{session('user')->admin_name}}">
                    
                  </div>
                </div><!-- row -->
                
                <br>

                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="email" class="form-control" value="{{session('user')->admin_email}}" name="admin_email">

                  </div>
                </div>


                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Profile Picture: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   <img height="80" id="image" width="80" class="img-thumbnail" src="/image/{{session('user')->admin_image}}" alt="">
                   <input type="file" onchange="showImage.call(this)"  name="admin_image" class="form-control">

                  </div>
                </div>

                
                <div class="row">
                  <label class="col-sm-4 form-control-label ckbox-success"><span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

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
                  <button type="submit" style="cursor:pointer;font-size:15px" class="btn btn-success"><i class="fas fa-edit"></i> Edit</button>
                  <a class="btn btn-warning" style="font-size:15px" href="{{ route('admin.account') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
                  
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </div><!-- col-6 -->
        </form>


		

	</div>	

<script>
	function showImage()
	{
		if(this.files && this.files[0])
		{
			var obj = new FileReader();
			obj.onload = function(data)
			{
				var image = document.getElementById('image');
				image.src = data.target.result ; 
			}

			obj.readAsDataURL(this.files[0]);
		}

	}
</script>


@endsection