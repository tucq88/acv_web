<div class="contact-info main-block container">
    <div class="contact-info-container row">
        <div class="contact col-md-4">
            <ul>
                <li><a class="logo"><img src="<?php bloginfo('template_directory')?>/img/logo.png"></a></li>
                <li>
                    <span class="glyphicon glyphicon-map-marker"></span>
                    <p>702 Anh Minh Building, Hoang Cau Str, Dong Da Dist, Hanoi.</p>
                </li>
                <li class="phone">
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <p>xxx-xxx-xxxx</p>
                </li>
                <li class="mail">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <p><a href="mailto:contact@sample.domain">contact@sample.domain</a></p>
                </li>
                <li class="website">
                    <span class="glyphicon glyphicon-globe"></span>
                    <p><a href="wwwsampledomain.vn">wwwsampledomain.vn</a></p>
                </li>
            </ul>
        </div>
        <div class="map col-md-4 visible-md visible-lg">
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script>
                var map;
                function initialize() {
                  var myLatLng = new google.maps.LatLng(21.018225, 105.824132);
                  var mapOptions = {
                    zoom: 16,
                    center: myLatLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                  };
                  map = new google.maps.Map(document.getElementById('map-mini'),
                      mapOptions);
        
                  var marker = new google.maps.Marker({
                      position: myLatLng,
                      map: map,
                      title: 'Atmarkcafe Viet Nam'
                  });
                }
                
                google.maps.event.addDomListener(window, 'load', initialize);
            
            </script>
            <div id="map-mini" style="width : 300px; height: 400px;">
            </div>
        </div>
        <div class="fanpage col-md-4 visible-md visible-lg">
            <div class="fb-like-box" data-href="https://www.facebook.com/atmarkcafevn" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=178127238931429";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>