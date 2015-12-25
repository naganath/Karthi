 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}"/>
  
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
  <script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
  <script type='text/javascript' language='javascript' src="{{ asset('js/map.js') }}"></script>

</head>
<body>

<div class="footer">
  <div class="row">
  <div class="col-md-3">
    <p class = "heading-para" >
    INFORMATION
    </p>
    <ul class = text>
    <li>Home</li>
    <li>About Us</li>
    <li>Services</li>
    <li>Product</li>
    <li>Gallery</li>
	<li>Enquiry</li>    	
    </ul>
  </div>
  <div class="col-md-3">
    <p class = "heading-para">
    CONTACT US
    </p>
    <span class = "highlight-text"  style="font-size:17px; font-weight:600">  Rathan Paints and Stores </span><br>
    <span class = text >
    Address Line 1,<br>
    Address Line 2 <br>
    Address Line 3. <br>
    Phone: <span class="highlight-text-2">04362 - 222222 </span><br>
    <span class= "highlight-text-2" style = "  margin-left:3.5em"> 04362 -333333 </span><br>
    Mobile: <span class = "highlight-text">9922992299</span><br>
    <span class = "highlight-text" style = "margin-left:3.5em">9922992299</span><br>
    Email: abc.0608@gmail.com <br>
    </span>
  </div>
  <div class="col-md-3">
    <p class = "heading-para">
    WORKING HOURS
    </p>
    <span class = text style="font-size:17px">
    <span class = "highlight-text-2">Monday - Saturday <br></span>
    9.00 AM - 10.00 PM<br>
    <span class= "highlight-text">Sunday Holiday<br>
    </span>
  </div>
  <div class="col-md-3">
    <p class = "heading-para">
    GOOGLE MAP
    </p>
    <div id="map">
    </div>
  </div>
  </div>
</div>
<script src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script>    
</body>
</html>
