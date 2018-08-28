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

      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="http://themetrace.com/templates/bracketplus/videos/video1.mp4" type="video/mp4">
        <source src="http://themetrace.com/templates/bracketplus/videos/video1.ogv" type="video/ogg">
        <source src="http://themetrace.com/templates/bracketplus/videos/video1.webm" type="video/webm">
      </video><!-- /video -->
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
		
	
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
			@if(session('message'))
			
			<div class="alert alert-danger" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			  <strong class="d-block d-sm-inline-block-force"><p>{{ session('message') }}!</p></strong>
			</div><!-- alert -->

		@endif
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> E-shopbd <span class="tx-info">.com</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">Admin Login Form</div>
			<form method="post">
			{{csrf_field()}}
          <div class="form-group">
            <input type="text" class="form-control fc-outline-dark" name="username" placeholder="Enter your username">
          </div><!-- form-group -->
          <div class="form-group">
            <input type="password" name="password" class="form-control fc-outline-dark" placeholder="Enter your password">
            <a href="#" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
          </div><!-- form-group -->
          <button type="submit" style="cursor:pointer" class="btn btn-info btn-block">Sign In</button>
			</form>
          <div class="mg-t-60 tx-center">Not yet a member? <a href="#" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="/admin/lib/jquery/jquery.js"></script>
    <script src="/admin/lib/popper.js/popper.js"></script>
    <script src="/admin/lib/bootstrap/js/bootstrap.js"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

  </body>

<!-- Mirrored from themetrace.com/templates/bracketplus/app/signin-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Aug 2018 16:27:25 GMT -->
</html>
