
<?php if (have_rows('featured_posts', 'options')) :?>

    <div class="content-block">
    <ul class="highlight-row">
                    <?php while( have_rows('featured_posts', 'options') ): the_row(); ?>

                    
                    
                                    
                             <?php $post_object = get_sub_field('featured_posts_item', 'options');
                                            if( $post_object ) :
                                                $post = $post_object;
                                                setup_postdata($post);
                                    ?>
                                            <li>
                                                <img src="<?php the_post_thumbnail_url();?>">
                                                <p class="secondary-content"><?php the_date();?></p>
                                                <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
                                                <p><?php the_excerpt();?></p>
                                            </li>
                                        <?php wp_reset_postdata();
                                    endif;?>
    
                                    
                                    
                                <?php endwhile;?>
                                </ul>
                                </div>
                                <?php endif;?>		
                                