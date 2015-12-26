
<html>
<head>
<title></title>

<link rel="stylesheet" href="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>
<body>
<div id="header">@include('header') </div>

<div id="slideshow"  >
	<img  id ="IMAGE" src="Images/shop1.jpg" alt=""  class = "active"> 
	<img  id ="IMAGE" src="Images/shop2.jpg" alt=""  > 
	<img  id ="IMAGE" src="Images/shop3.jpg" alt=""  > 
</div>

<div id="About-Us">
	<div class = "col-md-4">
	<img src="./Images/Karthi.jpg" id= "Owner">
	</div>

	<div id = "Intro" class="col-md-8">
		<h1>Welcome to Rathna Paint Stores </h1>
		<h4>One of the Premium paint & hardwares shop in Thanjavur District was started by Mr. T. Jayaraman (Prop) in the year of 1996.
Since the inception of the shop, had a rapid growth in the market and had the potential to increase the customer base in the city for this shop. During this time we had been recognized by the various paint companies and had received many awards from the companies. 
		</h4>

 	</div>
</div>

<div id="paintImage">
	<img src = "./Images/paint_bg.jpg"> 
	<p>OUR PAINT SPEAKS LOUDER THAN OUR WORDS</p>
</div>

<div id="paintCata">
	<p> PAINTS </p>
	<div >	
	<div class = "col-md-4">asian paints<br>
		<img class = "paint-Logo" src ="./Images/asianPaints.jpg"/>

	  </div>
	<div class = "col-md-4">sheenlac <br>
	<img class = "paint-Logo" src ="./Images/sheenlac.jpg"/>
</div>
	<div class = "col-md-4">Mrf <br>
	<img class = "paint-Logo" src ="./Images/MRF.jpg"/>
</div>
</div>
</div>

<div id="footer">@include('footer')</div>
<script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js') }}"></script>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>		

<!-- Include Files -->
<script type='text/javascript' language='javascript' src="{{ HTML::script('js/map.js') }}"></script> 
<script type='text/javascript' language='javascript' src="{{ HTML::script('js/imageSliding.js') }}"></script> 

</body>
</html>
