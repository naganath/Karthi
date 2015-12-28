function MapInitialize() {
  var mapCanvas = document.getElementById('map');
  console.log("Inside Map-1");
  var position =  new google.maps.LatLng(10.959677, 79.376568);
  var mapOptions = {
    center: position,
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(mapCanvas, mapOptions)
  var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"Rathna Paints Stores"
    });
  var contentString = 'Rathna Paint Stores';
  var infowindow = new google.maps.InfoWindow({
        content: contentString
  });
  console.log("Inside Map-2");
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
  });
  console.log("Inside Map-3");
};



    document.ready=function(){ 
    console.log("Inside Onload");
    google.maps.event.addDomListener(window, 'load', MapInitialize);
    LoadFunctions();
    console.log("after map Initialize");

  };



  function LoadFunctions() {
    MapInitialize();
    setInterval( "slideSwitch()", 3000 );
    ChangeTabName();
  }
