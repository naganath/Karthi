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
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Josefin+Slab:600') }}" rel='stylesheet' type='text/css'>
</head>
<body>

<div class="footer">
  <div class="row">
  <div class="col-md-3">
    <p class = "heading-para" >
    INFORMATION
    </p>
    <ul class = text>
    <li><a href="/">Home</a></li>
    <li><a href="aboutUs">About Us</a></li>
    <li><a href="services">Services</a></li>
    <li><a href="products">Product</a></li>
    <li><a href="gallery">Gallery</a></li>
    <li><a href="contactUs">Enquiry</a></li>   	
    </ul>
  </div>
  <div class="col-md-3">
    <p class = "heading-para">
    CONTACT US
    </p>
    <span class = "highlight-text"  style="font-size:17px; font-weight:600">  Rathna Paints and Stores </span><br>
    <span class = text >
    Shop No.  24/45, <br>
    Sarangapani Sannathi Street, <br>
    Kumbakonam -612001 <br>
    Phone: <span class="highlight-text-2">0435 - 2431132 </span><br>
    Mobile: <span class = "highlight-text">9443130371</span><br>
    <span class = "highlight-text" style = "margin-left:3.5em">9789708394</span><br>
    Email: rathnastorespaints@gmail.com <br>
    </span>
  </div>
  <div class="col-md-3">
    <p class = "heading-para">
    WORKING HOURS
    </p>
    <span class = text style="font-size:17px">
    <span class = "highlight-text-2">Monday - Saturday <br></span>
    9.00 AM - 10.00 PM<br>
    <span class = "highlight-text">Sunday <br>
    </span>
    9.00 AM - 2.00 PM<br>
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
</body>
</html>
