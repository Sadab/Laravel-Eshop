@extends('admin.layout')


@section('mainsection')

	<br>
	<div class="br-section-wrapper">
		
		<h2 class="text-center">Create Category</h2>
		<hr>

			<form method="post">
				{{ csrf_field() }}
			 <div class="col-xl-12" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                
                <div class="row">
                  <label class="col-sm-4 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
                    
                  </div>
                </div><!-- row -->
                
                <br>

                 <div class="row">
                  <label class="col-sm-4 form-control-label">Categoryd Description: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                   <textarea id="summernote" name="category_desc"></textarea>
                    
                  </div>
                </div><!-- row -->

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Parent Category: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <select name="" class="form-control select2-show-search" data-placeholder="Choose Brands">
                      <option value="Firefox">Select Category</option>
                      <?php

                          $result = DB::table('categories')
                          ->where('parent_id',null)
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option value="<?php echo $key->category_id ?>"><?php echo $key->category_name ;?></option>

                         <?php }

                      ?>
                     
                    </select>
                    
                  </div>
                </div>

                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Featured Class Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Enter Featured Class Name" name="mix_class">

                  </div>
                </div>


                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Publication status: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="checkbox" class="ckbox" value="1" name="publication_status">

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
                  <button type="submit" style="cursor:pointer;font-size:15px" class="btn btn-success"><i class="fas fa-plus"></i> Add Category</button>
                  <a class="btn btn-warning" style="font-size:15px" href="{{ route('category.list') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
                  
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </div><!-- col-6 -->
        </form>

	</div>

<script>
  
</script>

@endsection