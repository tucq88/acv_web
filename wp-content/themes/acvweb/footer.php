        <div id="push"></div>
    </div>
    <footer>
        <p id="back-top">
            <a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </p>
        
        <div class="footer-content container">
            <ul class="social-link nav nav-pills hide">
                <li><a href="#"><img src="holder.js/32x32"></a></li>
                <li><a href="#"><img src="holder.js/32x32"></a></li>
                <li><a href="#"><img src="holder.js/32x32"></a></li>
                <li><a href="#"><img src="holder.js/32x32"></a></li>
            </ul>
            <div class="row">
                <div class="col-md-6">
                    <ul class="main-page nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="footer-logo">
                        <p>Copyright © 2006 - 2013. All Right Reserved.</p>
                        <a href="#">
                            <img src="<?php bloginfo('template_directory')?>/img/logo.png" class="img-responsive" style="display:inline-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/holder.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.mousewheel.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
        $(document).ready(function() {
        	$('.acv-language').children('select').addClass('form-control');

    		// fade in #back-top
			$(window).scroll(function () {
				if ($(this).scrollTop() > 200) {
					$('#back-top').fadeIn(1500);
				} else {
					$('#back-top').fadeOut(1000);
				}
			});

			// scroll body to 0px on click
			$('#back-top a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
        	

            // Horizontal scroll in latest content
            $(".latest-content").niceScroll({
                cursorcolor: "#c71c2e",
                cursorwidth:"16px",
                cursorborderradius:"0px",
                background:"#f0f3f4"
            });

            $(".latest-content").mousewheel(function(event, delta, deltaX, deltaY) {
                this.scrollLeft -= (delta * 30);
                return false;
            });

            // Hover to show menu
            var timeout;
            $('.dropdown-toggle').parent().hover(function(event) {
                    // so a neighbor can't open the dropdown
                    if (!$(this).hasClass('open') && !$(this).children('.dropdown-toggle').is(event.target)) {
                        return true;
                    }

                    // close others
                    if ($(this).children('.dropdown-toggle').data()) {
                        $('.dropdown-toggle').parent().removeClass('open');
                    }
                    window.clearTimeout(timeout);
                    $(this).addClass('open');
                }, function() {
                    timeout = window.setTimeout(function() {
                        $('.dropdown-toggle').parent().removeClass('open');
                    }, 250);
                }
            );
        });
    </script>
    <!-- AddThis Smart Layers BEGIN -->
    <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-521b81ec15d1cf32"></script>
    <script type="text/javascript">
      addthis.layers({
        'theme' : 'transparent', 
        'follow' : {
          'services' : [
            {'service': 'facebook', 'id': 'atmarkcafevn'},
            {'service': 'twitter', 'id': 'atmarkcafevn'},
            {'service': 'linkedin', 'id': 'atmarkcafevn'},
            {'service': 'google_follow', 'id': 'atmarkcafevn'}
          ]
        }   
      });
    </script>
    <!-- AddThis Smart Layers END -->
    
    <?php wp_footer(); ?>
</body>
</html>
