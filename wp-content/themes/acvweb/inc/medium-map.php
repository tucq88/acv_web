<?php global $post; ?>
<?php if($post->ID == 37): ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize() {
          var myLatLng = new google.maps.LatLng(21.018225, 105.824132);
          var contentString = "<div style='font-weight : bold; text-align : center;'>Atmarkcafe Vietnam</div> Tầng 7, Tòa nhà Anh Minh 36 Hoàng Cầu, Đống Đa, Hà Nội";
          var mapOptions = {
            zoom: 16,
            center: myLatLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);

          var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: 'Atmarkcafe Viet Nam'
          });

          var infowindow = new google.maps.InfoWindow({
              content: contentString
          });

          google.maps.event.addListener(marker, 'click', function() {
    	    infowindow.open(map,marker);
    	  });
        }
        
        google.maps.event.addDomListener(window, 'load', initialize);
    
    </script>
    <div class="container" style="background-color : #E7EBEF; padding: 0px 30px 40px 30px;">
        <hr style="border-top: 1px solid #3a3937;">
        <div class="row">
            <div class="col-lg-11">
                <div style="font-size: 18px; margin-bottom : 20px;">
                    <span class="glyphicon glyphicon-map-marker" style="color : #c8162a; margin-right: 10px;"></span><?php _e('You can find us here', 'acvdev') ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div id="map-canvas" style="height : 400px;"></div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div style="font-size: 18px; margin-bottom : 20px;">
                    <span class="glyphicon glyphicon-map-marker" style="color : #c8162a; margin-right: 10px;"></span><?php _e('Tang 7, Toa nha Anh Minh', 'acvdev') ?>
                </div>
                <div style="font-size: 18px; margin-bottom : 20px;">
                    <span class="glyphicon glyphicon-earphone" style="color : #c8162a; margin-right: 10px;"></span><?php _e('043.734.9747', 'acvdev') ?>
                </div>
                <div style="font-size: 18px; margin-bottom : 20px;">
                    <span class="glyphicon glyphicon-envelope" style="color : #c8162a; margin-right: 10px;"></span><?php _e('phamhung@atmarkcafe.org', 'acvdev') ?>
                </div>
                <div style="font-size: 18px; margin-bottom : 20px;">
                    <span class="glyphicon glyphicon-globe" style="color : #c8162a; margin-right: 10px;"></span><?php _e('www.atmarkcafevn.org', 'acvdev') ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
