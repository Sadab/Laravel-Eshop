@extends('admin.layout')


@section('mainsection')

	<br>
	<h2 class="text-center">Edit Product</h2>

	     <form method="post" enctype="multipart/form-data">
				{{csrf_field()}}
        <input type="hidden" name="product_id" value="{{$product->id}}">
			 <div class="col-xl-12" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                
                <div class="row">
                  <label class="col-sm-4 form-control-label">Product Name: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                   <input type="text" class="form-control" value="{{$product->product_name}}" name="product_name">
                    
                  </div>
                </div><!-- row -->

				<br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product SKU: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                   <input type="text" class="form-control" value="{{$product->product_sku}}" name="product_sku">
                    
                  </div>
                </div><!-- row -->


                <br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Quantity: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    
                    <input type="text" class="form-control" value="{{$product->product_qty}}" name="product_qty">
                    
                  </div>
                </div><!-- row -->



                 <br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Price: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   <input type="text" class="form-control" value="{{$product->product_price}}" name="product_price">
                    
                  </div>
                </div><!-- row -->

                
                <br>

                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Description: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                   <textarea id="summernote" name="product_desc"><p>{{$product->product_description}}</p></textarea>

                    
                  </div>
                </div><!-- row -->


                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Category: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    
                    


                    <select name="category_id" class="form-control select2-show-search" data-placeholder="Choose Brands">
                      <option value="Firefox">Select Category</option>
                      <?php

                          $result = DB::table('categories')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option @if($product->category_name == $key->category_name) selected @endif value="<?php echo $key->category_id ?>"><?php echo $key->category_name ;?></option>

                         <?php }

                      ?>
                     
                    </select>
                    
                    
                  </div>
                </div>



                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Brand: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    
                    
                     <select name="brand_id" class="form-control select2-show-search" data-placeholder="Choose Brands">
                      <option value="Firefox">Select Brand</option>
                      <?php

                          $result = DB::table('brands')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option @if($product->brand_name == $key->brand_name) selected @endif value="<?php echo $key->brand_name ?>"><?php echo $key->brand_name ;?></option>

                         <?php }

                      ?>
                     
                    </select>
                    
                  </div>
                </div>


                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">product Image: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <img src="/image/{{ $product->product_image_1 }}"  style="border:2px solid #fff" id="image" alt="" height="100">
                    
                    <input type="file" class="form-control" value="{{old('product_image')}}" onchange="showImage.call(this)" name="product_image">
                   
                     
                    <p class="text-danger">{{$errors->first('product_image')}}</p>
                    
                  </div>
                </div>




                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Product Size: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    
                   
                      <select multiple name="product_size[]" class="form-control select2-show-search">
                      <option value="Firefox">Select Size</option>
                      <?php

                          $result = DB::table('sizes')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option 
                                
                                <?php

                                $like = explode(',',$product->product_size);
                                
                                foreach($like as $act)
                                {

                                  if($act == $key->size_name)
                                    echo "selected";
                                }

                              ?>

                               value="<?php echo $key->size_name ?>"><?php echo $key->size_name ;?>
                                
                              </option>

                         <?php }

                      ?>
                     
                    </select>
                    
                  </div>
                </div>




                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Product Color: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <select multiple name="product_color[]" class="form-control select2-show-search">
                      <option value="Firefox">Select Size</option>
                      <?php

                          $result = DB::table('colors')
                          ->get();
                          foreach($result as $key)
                          {
                             ?><option 
                                
                                <?php

                                $like = explode(',',$product->product_color);
                                
                                foreach($like as $act)
                                {

                                  if($act == $key->color_name)
                                    echo "selected";
                                }

                              ?>

                               value="<?php echo $key->color_name ?>"><?php echo $key->color_name ;?>
                                
                              </option>

                         <?php }

                      ?>
                     
                    </select>
                    
                    
                  </div>
                </div>


                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">product Gallery Image: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <?php




                        $image = explode(',',$product->gallary_image);
                        
                        foreach($image as $act)
                        {
                          echo '<img  height="100" width="100" src="/image/'.$act.'">';
                        }



                    ?>

                      <input type="file" class="form-control" id="fileupload" name="image_name[]" multiple>
                      <br>
                      <div id="dvPreview">

                      </div>

					         </div>
                    
                </div>



                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Product New lavel: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="checkbox" value="1" class="ckbox" @if($product->new_level != NULL) checked @endif  name="product_new_level">

                  </div>
                </div>


                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success"> Product Discount: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   
                   <input type="text" class="form-control" value="{{$product->discount_amount}}" name="product_discount">%

                  </div>
                </div>


                
          

                <div class="form-layout-footer mg-t-30">
                  <button type="submit" style="cursor:pointer;font-size:15px" class="btn btn-success"><i class="fas fa-plus"></i> Edit Product</button>
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