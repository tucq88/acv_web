<div class="contact-info main-block container">
    <div class="contact-info-container row">
        <div class="contact col-md-4">
            <ul>
                <li><a class="logo"><img src="<?php bloginfo('template_directory')?>/img/logo.png"></a></li>

                <li>
                    <span class="glyphicon glyphicon-registration-mark"><?php //_e('Company name :', 'acvweb'); ?></span>
                    <p><?php _e('Atmarkcafe Vietnam Company', 'acvweb'); ?></p>
                </li>
                <li>
                    <span class="glyphicon glyphicon-user"><?php //_e('Director :', 'acvweb'); ?></span>
                    <p><?php _e('Pham Hung', 'acvweb'); ?></p>
                </li>
<!--                <li>-->
<!--                    <span class="glyphicon glyphicon-registration-mark">--><?php ////_e('Established :', 'acvweb'); ?><!--</span>-->
<!--                    <p>--><?php //_e('Jun, 2012', 'acvweb'); ?><!--</p>-->
<!--                </li>-->

                <li>
                    <span class="glyphicon glyphicon-map-marker"></span>
                    <p><?php _e('R701, Anh Minh Bldg, No.36 Hoang Cau St, Dong Da Dist, Ha Noi', 'acvweb'); ?></p>
                </li>
                <li class="phone">
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    <p>04-3734-9747</p>
                </li>
                <li class="mail">
                    <span class="glyphicon glyphicon-envelope"></span>
                    <p><a href="mailto:contact@atmarkcafe.org">contact@atmarkcafe.org</a></p>
                </li>
                <li class="website">
                    <span class="glyphicon glyphicon-globe"></span>
                    <p><a href="http://www.atmarkcafe.org">www.atmarkcafe.org</a></p>
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