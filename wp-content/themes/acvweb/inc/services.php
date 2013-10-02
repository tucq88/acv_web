<div class="service main-block">
    <div class="container">
        <h1 class="block-title"><span>OUR SERVICES</span></h1>
        <div class="row">
            <?php
            global $pages;
            $pagesService = get_pages(array('child_of' => 48));
            if($pagesService):
                foreach($pagesService as $post):
                    setup_postdata($post);
            ?>
                    <article class="col-md-4">
                        <div class="intro">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="description"></div>
                        </div>
                        <h2><?php the_title() ?></h2>
                        <p><?php the_excerpt() ?></p>
                    </article>
            <?php
                endforeach;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>