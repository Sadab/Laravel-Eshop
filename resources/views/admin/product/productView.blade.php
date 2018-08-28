@extends('admin.layout')


@section('mainsection')

	<br>
	<h2 class="text-center">View Product</h2>

	
				
			 <div class="col-xl-12" style="margin: 0 auto">
              <div class="form-layout form-layout-4">
                
                <div class="row">
                  <label class="col-sm-4 form-control-label">Product Name: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   <p> {{$product->product_name}} </p>
                    
                  </div>
                </div><!-- row -->

				<br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product SKU: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   <p>{{$product->product_sku}}</p>
                    
                  </div>
                </div><!-- row -->


                <br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Quantity: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p>{{$product->product_qty}}</p>
                    
                  </div>
                </div><!-- row -->



                 <br>
                 <div class="row">
                  <label class="col-sm-4 form-control-label">Product Price: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   <p>{{$product->product_price}}</p>
                    
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
                    
                    {{$product->category_name}}
                    
                    
                  </div>
                </div>



                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Brand: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    
                    <p>{{$product->brand_name}}</p>
                    
                  </div>
                </div>


                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">product Image: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    
                    <img src="/image/{{ $product->product_image_1 }}"  style="border:2px solid #fff" id="image" alt="" height="100">
                    
                  </div>
                </div>




                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Product Size: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    
                    <p>{{$product->product_size}}</p>
                    
                  </div>
                </div>




                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">Product Color: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  
                   <p>{{$product->product_color}}</p>
                    
                  </div>
                </div>


                 <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label custom-file">product Gallery Image: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                    <?php

                        $image = explode(',',$product->gallary_image);
                        
                        foreach($image as $act)
                        {
                          echo '<img  height="100" src="/image/'.$act.'">';
                        }

                    ?>

					         </div>
                    
                </div>



                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success">Product New lavel: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="checkbox" class="ckbox" @if($product->new_level != NULL) checked @endif  name="product_new_level">

                  </div>
                </div>


                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label ckbox-success"> Product Discount: <span class="tx-danger"></span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                   
                   <p>{{$product->discount_amount}}%</p>

                  </div>
                </div>


                
          

                <div class="form-layout-footer mg-t-30">
                  
                  <a class="btn btn-warning" style="font-size:15px" href="{{ route('product.list') }}"><i class="fas fa-arrow-circle-left"></i> Back</a>
                  
                </div><!-- form-layout-footer -->

              </div><!-- form-layout -->
            </div><!-- col-6 -->
        



@endsection