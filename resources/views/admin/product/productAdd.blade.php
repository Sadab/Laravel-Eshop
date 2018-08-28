@extends('admin.layout')


@section('mainsection')

	<br>
	<h2 class="text-center">Add New Product</h2>

	<form method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			 <div class="col-xl-12" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                
                <div class="row">
                  <label class="col-sm-4 form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" value="{{old('product_name')}}" name="product_name" placeholder="Enter product name">
                    <p class="text-danger">{{$errors->first('product_name')}}</p>
                  </div>
                </div><!-- row -->

				<br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product SKU: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" value="{{old('product_sku')}}" name="product_sku" placeholder="Enter sku number">

                     <p class="text-danger">{{$errors->first('product_sku')}}</p>
                    
                  </div>
                </div><!-- row -->


                <br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" value="{{old('product_qty')}}" name="product_qty" placeholder="Enter number of quantity">
                     <p class="text-danger">{{$errors->first('product_qty')}}</p>
                    
                  </div>
                </div><!-- row -->



                 <br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Price: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" value="{{old('product_price')}}" name="product_price" placeholder="Enter price">

                     <p class="text-danger">{{$errors->first('product_price')}}</p>
                    
                  </div>
                </div><!-- row -->

                
                <br>

                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Description: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                   <textarea id="summernote" name="product_desc"></textarea>
                    
                  </div>
                </div><!-- row -->

                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Category: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <select name="category_id" class="form-control select2-show-search" data-placeholder="Choose Category">
                      <option value="">Select Category</option>
                      <?php

                          $result = DB::table('categories')
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
                  <label class="col-sm-4 form-control-label custom-file">Brand: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <select name="brand_id" class="form-control select2-show-search" data-placeholder="Choose Brands">
                      <option value="">Select Brand</option>
                      <?php

                          $result = DB::table('brands')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option value="<?php echo $key->brand_name ?>"><?php echo $key->brand_name ;?></option>

                         <?php }

                      ?>
                     
                    </select>
                    
                  </div>
                </div>


                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">product Image: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <input type="file" class="form-control" value="{{old('product_image')}}" onchange="showImage.call(this)" name="product_image">
                    <img src=""  style="border:2px solid #fff" id="image" alt="" height="100">
                     <p class="text-danger">{{$errors->first('product_image')}}</p>
                    
                  </div>
                </div>




                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Product Size: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <select multiple name="product_size[]" class="form-control select2-show-search" data-placeholder="Choose sizes">
                      <option value="Firefox">Select Size</option>
                      <?php

                          $result = DB::table('sizes')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option value="<?php echo $key->size_name ?>"><?php echo $key->size_name ;?></option>

                         <?php }

                      ?>
                     
                    </select>
                    
                  </div>
                </div>




                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Product Color: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <select name="product_color[]"  class="form-control select2-show-search" data-placeholder="Choose colors" multiple>
                      <option>Select Color</option>
                      <?php

                          $result = DB::table('colors')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option value="<?php echo $key->color_name ?>"><?php echo $key->color_name
                             ?></option>

                         <?php }

                      ?>
                     
                    </select>
                    
                  </div>
                </div>


                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">product Gallery Image: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <input type="file" class="form-control" id="fileupload" name="image_name[]" multiple>
                    <br>
                    <div id="dvPreview">

					</div>
                    
                  </div>
                </div>



                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Product New lavel: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="checkbox" class="ckbox" value="1" name="product_new_level">

                  </div>
                </div>


                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Add Product As Discount: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" name="product_discount" placeholder="Enter percentage">

                  </div>
                </div>



                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Add Product As Discount: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   @if(session('message'))
            					
            					<ul style="list-style: none">
            						
            							<li class="text-danger">*{{session('message')}}</li>
            						
            					</ul>


            					@endif

                  </div>
                </div>

				
                


                <div class="form-layout-footer mg-t-30">
                  <button type="submit" style="cursor:pointer;font-size:15px" class="btn btn-success"><i class="fas fa-plus"></i> Add Product</button>
                  <a class="btn btn-warning" style="font-size:15px" href="{{ route('product.list') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
                  
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </div><!-- col-6 -->
        </form>


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

	window.onload = function () {
    var fileUpload = document.getElementById("fileupload");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};

</script>

@endsection