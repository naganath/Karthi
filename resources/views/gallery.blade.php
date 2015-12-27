<html>
<head>
<title>Rathna Stores and Paints</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/gallery.css"/>

</head>
<body>
<div id="header">@include('header') </div>
<div width=100% height=500px >
	<img src ="./Images/PhotoGalleryLogo.jpg" width=100% height=500px/>
</div>
<div id = "GALLERY">
	<h1 style="text-align:center">Gallery</h1>
<div class="col-md-2"></div>
<div class ="col-md-9">
 <div class="row">
  <div class="col-md-4"><img class ="dimen" src = "./Images/web/Slide1.JPG" /></div>
  <div class="col-md-4"><img class ="dimen" src = "./Images/web/Slide2.JPG" /></div>
  <div class="col-md-4"><img class ="dimen" src = "./Images/web/Slide3.JPG" /></div>
  <div class="col-md-4"><img class ="dimen" src = "./Images/web/Slide4.JPG" /></div>
  <div class="col-md-4"><img class ="dimen" src = "./Images/web/Slide5.JPG" /></div>
  <div class="col-md-4"><img class ="dimen" src = "./Images/web/Slide6.jpg" /></div>
</div>
</div>
<div class="col-md-1"></div>
</div>

<div id="footer">@include('footer')</div>
<script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js') }}"></script>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>		

<!-- Include Files -->
<script type='text/javascript' language='javascript' src="{{ asset('js/map.js') }}"></script> 
<script type='text/javascript' language='javascript' src="{{ asset('js/imageSliding.js') }}"></script> 

</body>
</html>
