<?php global $post; ?>
<?php if($post->ID == 37): ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize() {
          var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(21.016497, 105.821950),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>
    <div class="container" style="background-color : #E7EBEF; padding: 0px 30px 40px 30px;">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div id="map-canvas" style="height : 400px;"></div>
            </div>
            <div class="col-lg-4 col-md-4">
            </div>
        </div>
    </div>
<?php endif; ?>
