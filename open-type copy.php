<? include("head.php"); ?>
   <!-- google maps-->
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD8yxYODUYckByN8QhQTp2igqS_R3OD2bo&sensor=false"
  type="text/javascript"></script>

  <script type="text/javascript">
      var directionDisplay;
      var directionsService = new google.maps.DirectionsService();
  
      function initialize() {
        var latlng = new google.maps.LatLng(52.387701,4.638484);
        directionsDisplay = new google.maps.DirectionsRenderer();
        var settings = {
          zoom: 16,
          center: latlng,
          mapTypeControl: true,
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: true,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
          mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
        directionsDisplay.setMap(map);        

        var companyImage = new google.maps.MarkerImage('assets/img/pointer.png?=v1',
          new google.maps.Size(292,120),
          new google.maps.Point(0,0),
          new google.maps.Point(150,120)
        );

        var companyShadow = new google.maps.MarkerImage('images/logo_shadow.png',
          new google.maps.Size(130,50),
          new google.maps.Point(0,0),
          new google.maps.Point(65, 50));

        var companyPos = new google.maps.LatLng(52.386467,4.64387);

        var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          shadow: companyShadow,
          title:"Høgenhaug",
          zIndex: 3});
        
        var trainImage = new google.maps.MarkerImage('images/train.png',
          new google.maps.Size(50,50),
          new google.maps.Point(0,0),
          new google.maps.Point(25,50)
        );

        var trainShadow = new google.maps.MarkerImage('images/train_shadow.png',
          new google.maps.Size(70,50),
          new google.maps.Point(0,0),
          new google.maps.Point(35, 50)
        );

        var trainPos = new google.maps.LatLng(57.0429, 9.9173);

        var trainMarker = new google.maps.Marker({
          position: trainPos,
          map: map,
          icon: trainImage,
          shadow: trainShadow,
          title:"Train Station",
          zIndex: 2
        });

        var parkingImage = new google.maps.MarkerImage('images/parking.png',
          new google.maps.Size(50,50),
          new google.maps.Point(0,0),
          new google.maps.Point(25,50)
        );

        var parkingShadow = new google.maps.MarkerImage('images/parking_shadow.png',
          new google.maps.Size(70,50),
          new google.maps.Point(0,0),
          new google.maps.Point(35, 50)
        );

        var parkingPos = new google.maps.LatLng(57.0437, 9.9147);

        var parkingMarker = new google.maps.Marker({
          position: parkingPos,
          map: map,
          icon: parkingImage,
          shadow: parkingShadow,
          title:"Parking Lot",
          zIndex: 1
        });
        
        google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
        });
      }

      function calcRoute() {
        var start = document.getElementById("start").value;
        var end = "57.0442, 9.9116";
        var request = {
          origin:start,
          destination:end,
          travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        
        directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          }
        });
      }
  </script>

  <!--END google maps-->

<body onload="initialize()">
  <? include("meny.php"); ?>
  <div class="contents">
    <!-- Begin experiment -->
    <aside>
      <section>
        <h1>Contact</h1>
        <ul>
          <li>Mitchel@jcenzo.nl</li>
          <li>06 38 63 27 35</li>
          <li>Gonnetstraat 26</li>
          <li>2011 KA Haarlem</li>
        </ul> 

        <ul class="projecten">
          <a class="tumb" href="#"><li><img src="assets/img/mvaneijgen.jpg"><p>Mitchel van Eijgen <small>Grafisch ontwerper, Jong creafief enzo</small></p></li></a>
          <a class="tumb" href="#"><li><img src="assets/img/jaapredeker.jpg"><p>Jaap Redeker <small>Developer, Atticweb</small></p></li></a>
          <a class="tumb" href="#"><li><img src="assets/img/davidhager.jpg"><p>David Hager <small>Marketing en social media, All terrain media</small></p></li></a>
        </ul>                    

        <div class="contact">
          <a href="mailto:mitchel@jcenzo.nl?Subject=Nieuw%20project" class="aanmelden" ><div class="btn icon-cube no-touch">Meld een project aan</div></a>
          <a href="http://twitter.com/jcenzo" class="hello" ><div class="btn icon-twitter no-touch">Just say Hello.</div></a>
        </div>

      </section>
    </aside> 

    <section id="map_canvas" style="width:100%; height:100%"></section>

  </div>
 

</body>
</html>