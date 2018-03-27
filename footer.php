<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 24verstkaWordpress
 */

?>
 <!--SECTION OUR GUARANTEE -->
 <section id="guarantee">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center"><?php if ( get_field('footer_post_title',9) ) { echo   get_field('footer_post_title',9) ;  } ?></h2>
                    <h4 class="text-center"><?php if ( get_field('footer_post_desc',9) ) { echo   get_field('footer_post_desc',9) ;  } ?></h4>
                    <div class="col-10-offset-1 col-md-8 offset-md-2 text-center  block_text">
                        <?php if ( get_field('footer_post_body',9) ) { echo   get_field('footer_post_body',9) ;  } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION FOOTER -->
    <section id="footer">
        <div class="container">
            <div class="row footer_content">
                <div class="col-12 col-sm-5">
                    <div class="row align-items-center footer_content_menu">
                        <div class="col-12">
                            <?php 
                            
                            wp_nav_menu( array(
                                'theme_location' => 'footer',
                                'container' => 'nav',
                                'menu_class' => 'nav nav_footer'
                            ));
                            
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-12 col-sm-5">
                    <div class="row align-items-center footer_content_social">
                        <div class="col-12">
                            <div class="row justify-content-end">
                                <div class="col-12 col-sm-8 sitelogo footer_sitelogo">
                                    <div class="sitelogo">
                                    <img src="<?php if( get_field('header_logo',9)) { echo get_field('header_logo',9);} ?>" alt="logo image">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-8">
                                    <div class="social_icons">
                                        <a href="<?php echo get_field('facebook',9) ?>" class="bage social" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="<?php echo get_field('twitter',9) ?>" class="bage social" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="<?php echo get_field('instagram',9) ?>" class="bage social" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-sm-4 text-left">
                        <span><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></span>
                    </div>
                    <div class="col-12 col-sm-4 text-right">
                        <span><?php the_author_link();?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php wp_footer(); ?>

</body>
</html>
