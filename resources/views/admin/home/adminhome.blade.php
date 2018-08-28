@extends('admin.layout')


@section('mainsection')


 <div class="br-pagetitle">
        <i class="icon fas fa-home"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Welcome to E-shopbd admin panel</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
        
        
         


        </div><!-- row -->

			<br>
        <div class="row">
        	 <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="rounded overflow-hidden" style="background-color: #ff9900">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion fas fa-cart-plus tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total orders</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">
                    <?php

                      $product = DB::table('tbl_order')->count();
                      echo $product;


                   ?>
                  </p>
                 
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->

			
			 <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="rounded overflow-hidden" style="background-color: #ff6600">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion fas fa-list-ol tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Products</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">
                    <?php

                      $product = DB::table('products')->count();
                      echo $product;


                   ?></p>
                  
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->


           <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="rounded overflow-hidden" style="background-color:#00cc66">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion fas fa-list-ul tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Brands</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">
                    <?php

                      $product = DB::table('brands')->count();
                      echo $product;


                   ?>
                  </p>
                  
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->


           <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="rounded overflow-hidden" style="background-color:#6699ff">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion fas fa-list tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Totol Category</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">
                    <?php

                      $product = DB::table('categories')->count();
                      echo $product;


                   ?>
                  </p>
                
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->

        </div>






        <div class="row row-sm mg-t-20">
          <div class="col-lg-12">
            <div class="card shadow-base">

            	<div>

            	<h2 class="text-center">Latest user</h2>
            	<hr>

            	<table class="table table-bordered table-orange">

            		<thead class="thead-colored thead-info">
            			
            		
	            		<tr>
	            			<th>User Name</th>
	            			<th>User Email</th>
	            			<th>User Phone</th>
	            			
	            		</tr>
					</thead>

					<tbody>

            <?php

                      $user = DB::table('customer')
                      ->limit(4)
                      ->get();
                     
                  foreach($user as $us)
                  {
                     echo "
                            

                            <tr>
                                <td>".$us->first_name." ".$us->last_name,"</td>
                                <td>".$us->email_address."</td>
                                <td>".$us->telephone."</td>
                                
                            </tr>
                     ";
                   }
							?>
						

					</tbody>	
	            	

            	</table>
             </div>
            </div><!-- card -->


          </div><!-- col-4 -->
        </div><!-- row -->



@endsection