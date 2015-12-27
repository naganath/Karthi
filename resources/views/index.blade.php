
<html>
<head>
<title></title>

<link rel="stylesheet" href="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>
<body>
<div id="header">@include('header') </div>

<div id="slideshow"  >
	<img  class ="IMAGE" src="./Images/shop1.jpg" alt=""  class = "active"> 
	<img  class ="IMAGE" src="Images/shop2.jpg" alt=""  > 
	<img  class ="IMAGE" src="Images/shop3.jpg" alt=""  > 
	<img  class ="IMAGE" src="Images/shop4.jpg" alt=""  > 

</div>

<div id="About-Us">
	<div class = "col-md-4">
	<img src="./Images/Karthi.jpg" id= "Owner">
	</div>

	<div id = "Intro" class="col-md-8">
		<h1>Welcome to Rathna Paint Stores </h1>
		<h4>Rathna Stores,founded by M.K.Govindan and his brother M.K.Swaminathan (Malaysia), had its humble beginning in a rented premise at 117, Nageswaren North Street, Kumbakonam in the year 1969. It then steadily grew to be  one of the premium paint traders in Thanjavur District and has now, its own premise at 24, Sarangapani Sannadhi, Kumbakonam. 
		</h4>

 	</div>
</div>

<div id="paintImage">
	<img src = "./Images/paint_bg.jpg"> 
	<p>OUR PAINT SPEAKS LOUDER THAN OUR WORDS</p>
</div>

<div id="paintCata">
	<p> Brands </p>
	<div >	
	<div class = "col-md-4">Asian Paints<br>
		<img class = "paint-Logo" src ="./Images/asianPaints.jpg"/>

	  </div>
	<div class = "col-md-4">Sheenlac <br>
	<img class = "paint-Logo" src ="./Images/sheenlac.jpg"/>
</div>
	<div class = "col-md-4">MRF <br>
	<img class = "paint-Logo" src ="./Images/MRF.jpg"/>
</div>
</div>
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
