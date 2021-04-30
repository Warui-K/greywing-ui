<?php
/**
 * Template part for displaying page content in page.php
 */
?>

    <div class="site-section bg-image overlay"
    style="background-image: url('<?php echo get_theme_mod('gr_service_bg_about');?>');">
    <div class="container">
        <div class="row justify-content-center text-center">
        <h1 class="mb-0"><?php the_title();?></h1>

        </div>
    </div>
</div>

<div class="bg-light py-3 px-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="/">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black"><?php the_title();?></strong>
            </div>
        </div>
    </div>
</div>
<div class="b-example-divider"></div>

<div class="site-section latest">
    <div class="container">

        <div class="row">
            <div class="col-md-8">


                <article class="blog-post text-dark">
                    <h2 class="blog-post-title"> <?php the_title();?></h2>

                    <p><?php the_content();?></p>
                    <hr>
                 </article>


            </div>
            <div class="col-md-4">
                <div class="p-4 mb-3 bg-light rounded">
                    <p class="mb-0"><?php the_tags();?></p>
                </div>

               

                <div class="p-4 text-info">
                    <h4>Share this page</h4>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><span class="bi bi-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><span class="bi bi-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><span class="bi bi-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

        </div><!-- /.row -->
    </div>
</div>