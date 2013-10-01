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
//             cursorborder:"none",
                cursorborderradius:"0px",
                /* cursoropacitymin:"1", */
                background:"#f0f3f4",
                railpadding: {top:0,right:0,left:0,bottom:0}
            });

            $(".latest-content").mousewheel(function(event, delta, deltaX, deltaY) {
                this.scrollLeft -= (delta * 30);
                if (delta < 0) {
                } else if (delta > 0) {
                }
                return false;
            });
        });
    </script>

</body>

</html>
