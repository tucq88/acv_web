<?php global $post; ?>
<?php if($post->post_parent): ?>
    <div class="service main-block">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) :
                    $postView = $post->ID;
                    $listPage = get_pages(array('child_of' => $post->post_parent));
                    if($listPage):
                        foreach($listPage as $post):
                            setup_postdata($post);
                            ?>
                            <article class="col-md-4">
                                <div class="intro">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive') ); ?></a>
                                </div>
                                <?php if ($postView == $post->ID): ?>
                                    <h2><?php the_title() ?></h2>
                                <?php else: ?>
                                    <h2><?php the_title() ?></h2>
                                <?php endif ?>
                            </article>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                    endif;
                endif; ?>
            </div>
        </div>
    </div>
<?php endif ?>