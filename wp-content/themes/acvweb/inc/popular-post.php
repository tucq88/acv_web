<!-- Popular Block -->
<div class="popular main-block hide">
    <h1 class="block-title"><span><?php _e('POPULAR POSTS', 'acvweb'); ?></span></h1>
</div>
<!-- End -->

<!-- Customer Block -->
<div class="customers main-block ">
    <div class="container">
        <div class="customers-content row">

            <?php if (function_exists('logo_slider')) { logo_slider(); } else {?>
                <div class="col-md-2 col-sm-3 col-xs-4"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE" class="img-responsive"></a></div>
                <div class="col-md-2 col-sm-3 col-xs-4"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE" class="img-responsive"></a></div>
                <div class="col-md-2 col-sm-3 col-xs-4"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE" class="img-responsive"></a></div>
                <div class="col-md-2 col-sm-3 hidden-xs"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE" class="img-responsive"></a></div>
                <div class="col-md-2 hidden-sm hidden-xs"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE" class="img-responsive"></a></div>
                <div class="col-md-2 hidden-sm hidden-xs"><a href="#"><img src="holder.js/128x128/#5E5E5F:#E7EBEE" class="img-responsive"></a></div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End -->