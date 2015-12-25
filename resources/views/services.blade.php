<html>
<head>
<title></title>

<link rel="stylesheet" href="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">

</head>
<body>
<div id="header">@include('header')</div>
<div id="service-image">
	<img src = "./Images/services.jpg" width=100% height=100% />
</div>
<div id ="services-body">
	<h1> Services </h1>	
<div id="table-container">
	<table id="TABLE" class="table-bordered" >
		<tr>
			<td width=70%> Asian paints Colour Consultant Expert advice </td>
			<td> <img src ="./Images/logo.png" width=100px height=100px></td>
		</tr>
		<tr>
			<td> Professional Painting Tips </td>
			<td><img src = "./Images/hiring_professional_painter.jpg" width=100px height=100px <td/>
		</tr>
		<tr>
			<td> Sale of Large Quantity Paints </td>
			<td><img src = "./Images/largepaint.jpg" width=100px height=100px <td/>
		</tr>
	</table>
</div>

</div>

<div id="footer">@include('footer')</div>

<script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
<script src="{{ aset('http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js') }}"></script>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>		

<!-- Include Files -->
<script type='text/javascript' language='javascript' src="{{ HTML::script('js/map.js') }}"></script> 
<script type='text/javascript' language='javascript' src="{{ HTML::script('js/imageSliding.js') }}"></script> 

</body>
</html>
