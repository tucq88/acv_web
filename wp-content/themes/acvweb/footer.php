    <footer>
        <div class="footer-content container">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in nulla sapien, consectetur dictum arcu.<br>Praesent justo felis, volutpat in mi vitae</p>
            <ul class="social-link nav nav-pills">
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
                <li><a href="#"><img src="holder.js/16x16"></a></li>
            </ul>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- JS -->
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/holder.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.mousewheel.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".latest-content").niceScroll({
                cursorcolor: "#c71c2e",
                cursorwidth:"16px",
                cursorborderradius:"0px",
                background:"#f0f3f4"
            });

            $(".latest-content").mousewheel(function(event, delta, deltaX, deltaY) {
                this.scrollLeft -= (delta * 30);
                if (delta < 0) {
                } else if (delta > 0) {
                }
                return false;
            });

            var timeout;
            $('.dropdown-toggle').parent().hover(function(event) {

                    // so a neighbor can't open the dropdown
                    if(!$(this).hasClass('open') && !$(this).children('.dropdown-toggle').is(event.target)) {
                        return true;
                    }

                    console.log(timeout);

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

</body>

</html>
