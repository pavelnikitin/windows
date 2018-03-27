<?php
/*
Template Name: Services Page
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
        </div>
</section>
<!-- SECTION GET QUOTE -->
<section id="getquote">
        <div class="row">
            <div class="col-12">
                <hr>
                <h3 class="text-center">Discuss your upcoming project with our consultants.</h3>
            </div>
            <div class="col-10 offset-1 col-md-8 offset-md-2 text-left  block_text">
                <div class="row justify-content-center align-items-center">
                    <button class="getquote_btn" data-toggle="modal" data-target="#exampleModal">get a free quote</button>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="row">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Request quote</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <form action="" method="post">
                                            <div class="row row-sm-offset">
                                                <div class="col-10 offset-1" data-for="name">
                                                    <div class="form-group">
                                                        <label class="form-control-label" >Name</label>
                                                        <input type="text" class="form-control" name="name"  required="">
                                                    </div>
                                                </div>
                                                <div class="col-10 offset-1" data-for="email">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Email</label>
                                                        <input type="email" class="form-control" name="email" required="">
                                                    </div>
                                                </div>
                                                <div class="col-10 offset-1" data-for="phone">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Phone</label>
                                                        <input type="tel" class="form-control" name="phone" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" data-for="message">
                                                <label class="form-control-label">Message</label>
                                                <textarea type="text" class="form-control" name="message" rows="4" data-form-field="Message" id="message-form1-m"></textarea>
                                            </div>

                                            <div class="input-group-btn">
                                                <button href="" type="submit" class="getquote_btn modal_btn">SEND FORM</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php

get_footer();
