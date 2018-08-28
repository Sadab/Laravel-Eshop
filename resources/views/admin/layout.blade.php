<!DOCTYPE html>
<html lang="en">
  
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Admin panel</title>

    <!-- vendor css -->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"> 
    <link href="{{asset('admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/highlightjs/github.css" rel="stylesheet')}}">
    <link href="{{asset('admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
     <link href="{{asset('admin/lib/medium-editor/medium-editor.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/medium-editor/default.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <link href="{{asset('admin/lib/select2/css/select2.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"> 
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/bracket.css')}}">
    
  </head>

  <body>


    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="{{route('admin.home')}}">E-shopbd.com</a></div>

    <div class="br-sideleft overflow-y-auto">

      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Menu item</label>

      <ul class="br-sideleft-menu">

        <li class="br-menu-item">
          <a href="{{route('admin.home')}}" class="br-menu-link active">
           
			<i class="fas fa-home" style="font-size:24px"></i>
            <span class="menu-item-label"> Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
          <a href="{{route('admin.account')}}" class="br-menu-link" style="margin-bottom:2px solid red">
            <i class="fas fa-user" style="font-size:24px"></i>
            <span class="menu-item-label">Account</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
          <a href="#" class="br-menu-link">
            <i class="fas fa-list" style="font-size:24px"></i>
            <span class="menu-item-label">Category</span>
            <i class="fas fa-angle-down"></i>
          </a><!-- br-menu-link -->

          <ul class="br-menu-sub">
            <li class="sub-item active"><a href="{{route('category.list')}}" class="sub-link">Category list</a></li>
            <li class="sub-item"><a href="{{route('category.create')}}" class="sub-link">Category create</a></li>
            
          </ul>

        </li>



        <li class="br-menu-item">
          <a href="#" class="br-menu-link">
            <i class="fas fa-list-ul" style="font-size:24px"></i>
            <span class="menu-item-label">Brand</span>
            <i class="fas fa-angle-down"></i>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('brand.list')}}" class="sub-link">Brand list</a></li>
            <li class="sub-item"><a href="{{route('brand.create')}}" class="sub-link">Brand create</a></li>
          </ul>
        </li><!-- br-menu-item -->



        <li class="br-menu-item">
          <a href="#" class="br-menu-link">
            <i class="fas fa-list-ol" style="font-size:24px"></i>
            <span class="menu-item-label">Product</span>
            <i class="fas fa-angle-down"></i>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="navigation.html" class="sub-link">Product List</a></li>
            <li class="sub-item"><a href="navigation-layouts.html" class="sub-link">Product Create</a></li>
            <li class="sub-item"><a href="{{route('product.color')}}" class="sub-link">Product Color</a></li>
            <li class="sub-item"><a href="{{route('product.size')}}" class="sub-link">Product Size</a></li>
          </ul>
        </li><!-- br-menu-item -->



        <li class="br-menu-item">
          <a href="{{route('order.list')}}" class="br-menu-link">
            <i class="fas fa-cart-plus" style="font-size:24px"></i>
            <span class="menu-item-label">Orders</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
          <a href="{{route('user.list')}}" class="br-menu-link">
            <i class="far fa-list-alt" style="font-size:24px"></i>
            <span class="menu-item-label">User List</span>
          </a><!-- br-menu-link -->
          
        </li><!-- br-menu-item -->


        <li class="br-menu-item">
          <a href="#" class="br-menu-link">
            <i class="fas fa-sliders-h" style="font-size:24px"></i>
            <span class="menu-item-label">Slider</span>
            <i class="fas fa-angle-down"></i>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="sub-item"><a href="table-basic.html" class="sub-link">Slider list</a></li>
            <li class="sub-item"><a href="table-datatable.html" class="sub-link">Create slider</a></li>
          </ul>
        </li><!-- br-menu-item -->



        <li class="br-menu-item">
          <a href="#" class="br-menu-link">
            <i class="fas fa-th-list" style="font-size:24px"></i>
            <span class="menu-item-label">Social Icon</span>
             <i class="fas fa-angle-down"></i>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="map-google.html" class="sub-link">Icon List</a></li>
            <li class="sub-item"><a href="map-leaflet.html" class="sub-link">Add icon</a></li>
          </ul>
        </li><!-- br-menu-item -->



       
      </ul><!-- br-sideleft-menu -->



      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Memory Usage</p>
            <h5 class="info-list-amount">32.3%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">CPU Usage</p>
            <h5 class="info-list-amount">140.05</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Disk Usage</p>
            <h5 class="info-list-amount">82.02%</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
          <div>
            <p class="info-list-label">Daily Traffic</p>
            <h5 class="info-list-amount">62,201</h5>
          </div>
          <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
      </div><!-- info-list -->

      <br>

    </div>



    <!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->











    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">

      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="fas fa-align-justify"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="fas fa-align-justify"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->


      <div class="br-header-right">

        <nav class="nav">

          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="far fa-envelope tx-24" style=""></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Messages</label>
                <a href="#">+ Add New Message</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link">
                  <div class="media">
                    <img src="{{asset('admin/img/img3.jpg')}}" alt="">
                    <div class="media-body">
                      <div>
                        <p>Donna Seay</p>
                        <span>2 minutes ago</span>
                      </div><!-- d-flex -->
                      <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
               
                <div class="dropdown-footer">
                  <a href="#"><i class="fa fa-angle-down"></i> Show All Messages</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->




          <div class="dropdown">
            <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="far fa-bell tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Notifications</label>
                <a href="#">Mark All as Read</a>
              </div><!-- d-flex -->

            


              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media">
                    <img src="{{asset('admin/img/img8.jpg')}}" alt="">
                    <div class="media-body">
                      <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
               
                <div class="dropdown-footer">
                  <a href="#"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->

		<br>


          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><b>Welcome </b>{{session('user')->admin_name}}</span>
              <img src="/image/{{session('user')->admin_image}}" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href="{{route('admin.account')}}"><img src="/image/{{session('user')->admin_image}}" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname">{{session('user')->admin_name}}</h6>
                <p>{{session('user')->admin_email}}</p>
              </div>
              
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{route('edit.profile')}}"><i class="icon far fa-user"></i> Edit Profile </a></li>
                <li><a href="#"><i class="icon fas fa-key"></i> change password</a></li>
                <li><a href="{{route('logout')}}"><i class="icon fas fa-sign-out-alt"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
       
      </div><!-- br-header-right -->

    </div><!-- br-header -->



    <!-- ########## END: HEAD PANEL ########## -->

    <div class="br-mainpanel">
    
      <div class="br-pagebody">
    	

    	@yield('mainsection')
     


    </div><!-- br-pagebody -->

      <footer class="br-footer">
        <div class="footer-left">

          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
         
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-facebook-square tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-twitter-square tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('admin/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('admin/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('admin/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('admin/lib/moment/moment.js')}}"></script>
    
    <script src="{{asset('admin/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{asset('admin/lib/peity/jquery.peity.js')}}"></script>
    <script src="{{asset('admin/lib/d3/d3.js')}}"></script>
    <script src="{{asset('admin/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('admin/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/lib/flot-spline/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('admin/lib/select2/js/select2.full.min.js')}}"></script>
     <script src="{{asset('admin/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="{{asset('admin/js/bracket.js')}}"></script>
    <script src="{{asset('admin/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('admin/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    
    <script src="{{asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    </script><script src="{{asset('admin/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
     <script src="{{asset('admin/lib/peity/jquery.peity.js')}}"></script>
    <script src="{{asset('admin/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('admin/js/tooltip-colored.js')}}"></script>
    <script src="{{asset('admin/lib/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('admin/lib/medium-editor/medium-editor.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    


    

    <script>
      
      $(function(){
        'use strict'

       
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    

    
    $('[data-toggle="tooltip"]').tooltip(); 
     
     var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        });
      



      $('#datatable1').DataTable({

        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });


      $(document).on("click" , '#delete' , function(e){

        e.preventDefault();

        var link = $(this).attr("href");

        bootbox.confirm({ 



          message: "Are You sure you want to delete This Item?",
          buttons: {
            confirm: {
              label: 'Yes',
              className: 'btn-success'
            },
            cancel: {
              label: 'No',
              className: 'btn-danger'
            }
          },


          callback: function (result) {

            if(result)
            {
              window.location.href = link;
            }
          }


        });
      });

      

      </script>

  </body>


</html>
