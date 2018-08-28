@extends('admin.layout')


@section('mainsection')

	<br>
	<div class="br-section-wrapper">
		
		<h2 class="text-center">Edit Brand</h2>
		<hr>

			<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			 <div class="col-xl-8" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                <input type="hidden" value="{{$brand->brand_id}}" name="brand_id">
                <div class="row">
                  <label class="col-sm-4 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control  is-valid" value="{{$brand->brand_name}}" name="brand_name" placeholder="Enter brand name">
                    <p></p>
                  </div>
                </div><!-- row -->

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Brand Logo: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="file" class="form-control is-valid" name="brand_image">
                    
                  </div>
                </div>



                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Brand Logo: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <img width="120" class="img-thumbnail"  height="90" src="/image/{{$brand->brand_image}}" alt="">
                    
                  </div>
                </div>

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Publication status: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    @if($brand->publication_status == 1)
                    <input type="checkbox" class="ckbox" value="1" checked name="publication_status">

                    @else

                    <input type="checkbox" class="ckbox" value="1" name="publication_status">

                    @endif

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
                  <button type="submit" style="cursor:pointer ; font-size:15px"  class="btn btn-success"><i class="fas fa-edit"></i> Edit</button>
                  <a class="btn btn-warning" style="cursor:pointer ; font-size:15px" href="{{ route('brand.list') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
                  
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </div><!-- col-6 -->
        </form>

	</div>
@endsection