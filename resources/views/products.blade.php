<html>
<head>
<title></title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/services.css"/>

</head>
<body>
<div id="header">@include('header') </div>
<div width=100% height=500px >
	<img src ="./Images/brands_banner.jpg" width=100% height=100%/>
</div>
<div id="prod-contents">
	<h1 style="text-align:center">PRODUCTS </h1>
	<img src="./Images/part-1.png" width=100% height=100%/>
	<img src="./Images/part-2.png" width=100% height=100%/>
	<img src="./Images/part-3.png" width=100% height=100%/>

<div id="footer">@include('footer')</div>
<script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
<script src="{{ aset('http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js') }}"></script>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>		

<!-- Include Files -->
<script type='text/javascript' language='javascript' src="{{ HTML::script('js/map.js') }}"></script> 
<script type='text/javascript' language='javascript' src="{{ HTML::script('js/imageSliding.js') }}"></script> 

</body>
</html>
