<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get" class="search navbar-right">
    <div>
<!--        <label for="s" class="screen-reader-text">Search for:</label>-->
<!--        <input type="text" id="s" name="s" value="" />-->
        <input type="text" id="s" name="s" placeholder="<?php _e('Search here...', 'acvweb') ?>">
        <input type="submit" value="<?php _e('Search', 'acvweb') ?>" id="searchsubmit" />
    </div>
</form>