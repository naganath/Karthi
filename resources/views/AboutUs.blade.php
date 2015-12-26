<html>
<head>
<title></title>

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
		Sri Krishna Hardwares are authorised dealers and retailers of excellent quality of paints in the industry. We in the hardware industry as a retailer with around 20 yrs of experience in the sales of paints and hardware goods in the Thanjavur based. We set business catering the back-up power needs of scores of customers with diverse applications and various levels of service expectations. Prompt and swift customer service is our core strength in this market. Our Specialty We have hired highly skilled and experienced sales boys in the shop to understand and server the needs and requirements of customer. Our company also have well trained sales and services team to keep their eye on market to understand the latest market demand. We offer reliable,durable and customized products to the customers
	</div>
	<div class ="col-md-5">
		<img src ="./Images/shop1.jpg" id ="intro-pic"/>
	</div>
</div>
<br>
<div id = "Strength">
	<h1> Strength</h1>
	<div id= "content">
	We at SKH, never compromise with quality of products and customer's satisfaction. Our company has appointed the shop boys to understand the needs of the customer and to serve the right product intime. All our staffs and engineers are well-versed with latest technology and modern machines. Our company has well-trained technical shopboys for mixing of right colors through the Color world machines. Customer centric business process Expertised salesmans in serving of customers for the Hardware goods within the customers budget.
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
