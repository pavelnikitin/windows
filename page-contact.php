<?php
/*
Template Name: Contact Page
 */

get_header();
?>
<section id="pagecontent">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1 col-md-8 offset-md-2 text-left block_text">
                    <?php while ( have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile ; ?>
                </div>
            </div>
        
            <div class="row">  
                <div class="col-12">
                    <div class="row">
                        <div class="col-10 offset-1 col-md-5 offset-md-1"><h5 class="text-center"><strong>Phone:</strong><a href="tel:1111111">  <?php echo   get_field('phone_number') ;  ?></a></h5></div>
                        <div class="col-10 offset-1 col-md-5 offset-md-1"><h5 class="text-center"><strong>Email:</strong><a href="mailto:example@mail.com">  <?php echo   get_field('email') ;  ?></a></h5></div>    
                    </div>
                </div>
                <div class="col-12 contact_us">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-10 offset-1 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input type="text" class="form-control" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" class="form-control" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Phone</label>
                                    <input type="tel" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="col-10 offset-1 col-md-6">
                                <div class="form-group" data-for="message">
                                    <label class="form-control-label">Message</label>
                                    <textarea type="text" class="form-control" name="message" rows="4" data-form-field="Message" id="message-form1-m"></textarea>
                                </div>

                                <div class="input-group-btn">
                                    <button href="" type="submit" class="getquote_btn modal_btn contact_btn">SEND FORM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- google map -->
                <div class="col-12 google_map ">
                    <h2 class="text-center block_text">Find us</h2>
                    <div class="row">
                        <div class="col-8 offset-2" id="map">

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php

get_footer();
