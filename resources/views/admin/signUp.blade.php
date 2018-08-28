<!DOCTYPE html>
<html lang="en">
  

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin Login</title>

    <!-- vendor css -->
    <link href="/admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="/admin/css/bracket.css">
  </head>

  <body>
  
		

    <div class="d-flex align-items-center justify-content-center ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        @if(session('message'))
      
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong class="d-block d-sm-inline-block-force"><p>{{ session('message') }}!</p></strong>
      </div><!-- alert -->

    @endif
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> E-shop <span class="tx-info">BD</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">Admin Registration Form</div>
        <form method="post">
          {{csrf_field()}}
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('username')}}" name="username" placeholder="Enter your username">
           <p class="text-danger">{{$errors->first('username')}}</p>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control"  value="{{old('password')}}" name="password" placeholder="Enter your password">
           <p class="text-danger">{{$errors->first('password')}}</p>
        </div><!-- form-group -->

        <div class="form-group">
          <input type="password" class="form-control" name="confirmPassword" placeholder="Enter password again">
           <p class="text-danger">{{$errors->first('confirmPassword')}}</p>
        </div><!-- form-group -->

        <div class="form-group">
          <input type="text" class="form-control"  value="{{old('fullName')}}" name="fullName" placeholder="Enter your fullname">
           <p class="text-danger">{{$errors->first('fullName')}}</p>
        </div><!-- form-group -->

        <div class="form-group">
          <input type="text" class="form-control"  value="{{old('phone')}}" name="phone" placeholder="Enter phone number ">
           <p class="text-danger">{{$errors->first('phone')}}</p>
        </div><!-- form-group -->
        
        <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
        <button type="submit" style="cursor:pointer" class="btn btn-info btn-block">Sign Up</button>
      </form>
        <div class="mg-t-40 tx-center">Not yet a member? <a href="#" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="/admin/lib/jquery/jquery.js"></script>
    <script src="/admin/lib/popper.js/popper.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.js"></script>
    <script>
       $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>
    </script>

  </body>

<!-- Mirrored from themetrace.com/templates/bracketplus/app/signin-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Aug 2018 16:27:25 GMT -->
</html>
