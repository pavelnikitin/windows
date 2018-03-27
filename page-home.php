<?php
/*
Template Name: Home Page
 */

get_header();
?>
<section id="pagecontent">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1 col-md-8 offset-md-2 text-left  block_text">
                    <?php while ( have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile ; ?>
                </div>
            </div>
            <div class="row">
                <?php $loop = new WP_Query( array( 'post_type' => 'home_thumbnail',
                'orderby' => 'post_id', 'order' => 'ASC')); ?>

                <?php while( $loop->have_posts()) : $loop->the_post();?>
                    <div class="col-10 offset-1 pagecontent_img" <?php if ( get_field('thumbnail_image') ) { echo 'style="background-image: url(' . get_field('thumbnail_image') . ')"'; } ?>>
                        <div class="pagecontent_img_desc" ><h4><?php the_title(); ?></h4></div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center"><?php if ( get_field('down_post_heading') ) { echo   get_field('down_post_heading') ;  } ?></h2>
                </div>
                <div class="col-10 offset-1 col-md-8 offset-md-2 text-left  block_text">
                    <p><?php if ( get_field('down_post_body') ) { echo   get_field('down_post_body') ;  } ?></p>
                </div>
            </div>
        </div>
    </section>


<?php

get_footer();
