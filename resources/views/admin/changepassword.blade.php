@extends('admin.layout')

@section('mainsection')

	<br>
    @if(session('message'))
      
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong class="d-block d-sm-inline-block-force"><p>{{ session('message') }}!</p></strong>
      </div><!-- alert -->

    @endif

	<div class="br-section-wrapper">
		
		<h2 class="text-center">Change Password</h2>

		<hr>



			<form method="post">
				{{ csrf_field() }}
			 <div class="col-xl-12" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                

                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Old Password: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   <input type="password" name="oldPassword" placeholder="Enter old password" class="form-control">
                    <p class="text-danger">{{$errors->first('oldPassword')}}</p>

                  </div>
                </div>

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">New Password: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   <input type="password" name="newPassword" placeholder="Enter new password" class="form-control">
                    <p class="text-danger">{{$errors->first('newPassword')}}</p>

                  </div>
                </div>

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Confirm Password: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   <input type="password" placeholder="Enter New password Again" name="conPassword" class="form-control">
                    <p class="text-danger">{{$errors->first('conPassword')}}</p>

                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-4 form-control-label ckbox-success"><span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    
            					

            				

                  </div>
                </div>


                <div class="form-layout-footer mg-t-30">
                  <button type="submit" style="cursor:pointer;font-size:15px" class="btn btn-success"><i class="fas fa-edit"></i> Change</button>
                  
                  
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </div><!-- col-6 -->
        </form>


		

	</div>	




@endsection