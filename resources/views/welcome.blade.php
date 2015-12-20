<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<div class="row ">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">
 <div class="panel-heading">
     
      <div class="row">
              <div class="col-md-12" style="padding:10px;">
                  <input id="name" type="text" class="form-control" placeholder="Name">
              </div>
          </div>
     <div class="row">
              <div class="col-md-12" style="padding:10px;">
                  <input id="mobile" type="tel" class="form-control" placeholder="Mobile Number">
              </div>
          </div>
      <div class="row">
          <div class="col-md-12" style="padding:10px;">
              <input id="email" type="email" class="form-control" placeholder="Email">
          </div>
      </div>
      <div class="row">
              <div class="col-md-12" style="padding:10px;">
                  <input id="city" type="text" class="form-control" placeholder="City">
              </div>
          </div>
     <div class="row">
              <div class="col-md-12" style="padding:10px;">
                  <textarea id="message" rows="7" cols="50" class="form-control" placeholder="Message"></textarea>
              </div>
          </div>

      <div class="row">
              <div id="notified" class="col-md-12" style="padding:10px;">
              </div>
          </div>

       <div class="row" style="padding:10px;">
              <div class=" col-md-offset-6 col-md-6 col-sm-6 col-xs-6">
                  <input type="submit" onclick="sendMail()" class="btn btn-warning btn-block" value="Send">
              </div>
          </div>
     
    </div>
  </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
    function sendMail() {
        //finish loading in 3s
        $.ajax({
          type: 'GET',
          url: "{{ URL::to('/contact') }}",
          data: {
            "name": $("#name").val(),
            "email": $("#email").val(),
            "mobile": $("#mobile").val(),
            "city": $("#city").val(),
            "message": $("#message").val()            
          }
         }).complete(function(jqXHR, textStatus){
            switch(jqXHR.status) {
                case 200:
                    $("#name").val("");
                    $("#email").val("");
                    $("#mobile").val("");
                    $("#city").val("");
                    $("#message").val("");
                    $("#notified").html("<img src='http://www.hairbytoyin.co.uk/images/sent.gif' />");
                    break;
                default:
            }
        });
    }
</script>
</body>
</html>