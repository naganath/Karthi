<html>
<head>
<title>Rathna Stores and Paints</title>

<link rel="stylesheet" href="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">

<link href="{{ asset('css/AboutUs.css') }}" rel="stylesheet">

</head>
<body>
<div id="header">@include('header')</div>
<div id="us_photo">
	<img src="./Images/shop1.jpg" id= "Owner">
</div>
<div id ="about-us">
	<h1> What We are ... </h1>
	<div id="cOntent">
	<div class ="col-md-7">
		With 47 years of glorious service, Rathna Stores steadily grew to be  one of the premium paint traders in Thanjavur District. It has another reason to be proud of, being one of the few family run organisations, currently being controlled by the third generation, from Sri M.K. Govindan to Sri Vivekanandan Govindan to Sri Swaminathan Vivekanandan.
<br><p>With nearly 50 years of experience in the sale of paints and hardware goods, we never compromise on the  quality of products and ensure the customer's full satisfaction. With a clear understanding of changing product demands, we carefully analyze the market to understand the latest market demands and trends.</p>
	</div>
	<div class ="col-md-5">
		<img src ="./Images/what_we_are.jpg" id ="intro-pic"/>
	</div>
</div>
<br>
<div id = "Strength">
	<h1> Strength</h1>
	<div id= "content">
	Our company is equipped with the latest technologies and modern machines and, along with our well trained sales and services team, we will provide you with latest products of the highest quality that cater to all your building and housing needs.
We have been a consistent member of the Asian Paints Privilege Club for the past 5 years and have won numerous achievement awards, not only from Asian Paints but also from other reputed brands like JK Cements, Sheenlac, MRF etc. 
	</div>
</div>
</div>
	<div id="footer">@include('footer')</div>
<script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js') }}"></script>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>		
<script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
<!-- Include Files -->
<script type='text/javascript' language='javascript' src="{{ asset('js/map.js') }}"></script> 
<script type='text/javascript' language='javascript' src="{{ asset('js/imageSliding.js') }}"></script> 
</body>

</html>
