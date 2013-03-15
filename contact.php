<!doctype html>  
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        
        <title>Portfolio | Jong creatief enzo</title>

        <meta name="description" content="Wij laten zien dat je geen doorgewinterde ondernemer hoeft te zijn om een bedrijf op te richten. Je moet weten waar je voor staat en je hart in je werk stoppen.">
        <meta name="author" content="M van Eijgen">

        
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
        <script>
        if (!("ontouchstart" in document.documentElement)) {
            document.documentElement.className += " no-touch";
            }
        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/resources/img/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">
        <!-- Begin meny -->
        <meta name="viewport" content="width=800, user-scalable=no">
        <script src="assets/js/meny.js" type="text/javascript"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <!-- End meny -->


        <!-- google maps-->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD8yxYODUYckByN8QhQTp2igqS_R3OD2bo&sensor=false"
        type="text/javascript"></script>

    <script type="text/javascript">
      function initialize() {
        var latlng = new google.maps.LatLng(52.387073,4.639814);
        var settings = {
          zoom: 16,
          center: latlng,
          mapTypeControl: false,
          mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
          navigationControl: true,
          navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
          mapTypeId: google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        
        var companyImage = new google.maps.MarkerImage('assets/img/pointer.png?v=1',
          new google.maps.Size(70,70),
          new google.maps.Point(0,0),
          new google.maps.Point(70,70)
        );


        var companyPos = new google.maps.LatLng(52.386497,4.643784);

        var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          icon: companyImage,
          title:"Jong creatief enzo",
          zIndex: 3});
        
        google.maps.event.addListener(companyMarker, 'click', function() {
          infowindow.open(map,companyMarker);
        });
      }
    </script>

        <!--END google maps-->
        <!-- google analitics-->
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37039342-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>            
    </head>
    
    <body onload="initialize()">
        <? include("meny.php"); ?>
        <div class="contents">
        <!-- Begin experiment -->
            <aside>
                <section>
                    <h2>Contact</h2>
                    <form></form>


                    <h2>Volg ons op Twitter</h2>
                    <a href="https://twitter.com/jcenzo" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @jcenzo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                     
                </section>
            </aside> 
        <!-- end experiment -->

        <section id="map_canvas" style="width:100%; height:100%"></section>


 
   




        </div>
   </body>
</html>