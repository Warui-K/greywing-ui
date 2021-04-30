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


<div class="site-section latest">
    <div class="container">

        <div class="row">
            <div class="col-md-8">


                <article class="blog-post text-dark">
                    <h2 class="blog-post-title"> <?php the_title();?></h2>
                    <p class="blog-post-meta">Posted on <?php echo get_the_date();?> by <a href="<?php $author_URL;?>"><?php the_author();?></a></p>

                    <p><?php the_content();?></p>
                    <hr>
                 </article>


                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-info" href="#">Older</a>
                    <a class="btn btn-outline-secondary" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </nav>

            </div>
            <div class="col-md-4">
                <div class="p-4 mb-3 bg-light rounded">
                    <p class="mb-0"><?php the_tags();?></p>
                </div>

                <div class="p-4 text-info">
                    <h4>Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>

                <div class="p-4 text-info">
                    <h4>Share this article</h4>
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