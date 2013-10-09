<style>
.deactive-nav {
    opacity : 0.5;
}
.deactive-nav:hover {
    opacity : 0.8;
}
.active-nav {
    color: #ffffff;
    background-color: #428bca;
    padding : 10px;
}
</style>
<?php global $post; ?>
<?php if($post->post_parent): ?>
    <div class="service">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) :
                    $postView = $post->ID;
                    $listPage = get_pages(array('child_of' => $post->post_parent));
                    if($listPage):
                        foreach($listPage as $post):
                            setup_postdata($post);
                            ?>
                            <?php if ($postView == $post->ID): ?>
                                <article class="col-md-4">
                                    <div class="intro hidden-xs">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive img-center') ); ?></a>
                                    </div>
                                    <h2 class="hidden-xs"><?php the_title() ?></h2>
                                    <h3 class="visible-xs active-nav"><b><?php the_title() ?></b></h3>
                                </article>
                            <?php else: ?>
                                <article class="col-md-4 deactive-nav">
                                    <div class="intro hidden-xs">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive img-center') ); ?></a>
                                    </div>
                                    <h2 class="hidden-xs"><?php the_title() ?></h2>
                                    <h3 class="visible-xs"><?php the_title() ?></h3>
                                 </article>
                            <?php endif ?>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                    endif;
                endif; ?>
            </div>
        </div>
    </div>
<?php endif ?>