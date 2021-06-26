<?php
/**Template Name:  About Us Page*/
?>
<?php get_header();?>
<div class="site-blocks-cover bg-image overlay" style="background-image: url('<?php echo get_theme_mod('gr_bg_image')?>');">');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto align-self-center">
            <div class="site-block-cover-content text-center">
              <h1 class="mb-0">About Us</h1>
              <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                  <p><?php echo get_theme_mod('gr_about_text_main')?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="<?php echo get_theme_mod('gr_core_focus_image')?>" alt="Image placeholder" class="img-fluid img-thumbnail">

              
              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Our core focus</h2>
            </div>
            <div class="step-number d-flex mb-4">
              <span>1</span>
              <p><?php echo get_theme_mod('gr_core_focus_1')?></p>
            </div>
            <div class="step-number d-flex mb-4">
              <span>2</span>
              <p><?php echo get_theme_mod('gr_core_focus_2')?></p>
            </div>
            <div class="step-number d-flex mb-4">
              <span>3</span>
              <p><?php echo get_theme_mod('gr_core_focus_3')?></p>
            </div>
            <div class="step-number d-flex mb-4">
              <span>4</span>
              <p><?php echo get_theme_mod('gr_core_focus_4')?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="<?php echo get_theme_mod('gr_vision_image')?>" alt="Image placeholder" class="img-fluid img-thumbnail">
              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">We have a vision</h2>
            </div>
            <p class="text-black"><?php echo get_theme_mod('gr_values_text')?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="<?php echo get_theme_mod('gr_values_image')?>" alt="Image placeholder" class="img-fluid img-thumbnail">
              </figure>
            </div>
          </div>

          <div class="col-md-1"></div>

          <div class="col-md-5">
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">We have values</h2>
            </div>
            <p class="text-black"><?php echo get_theme_mod('gr_values_text')?></p>
            <div class="d-flex flex-row mb-4 align-items-center">
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_1')?></span>
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_2')?></span>
            </div>
            <div class="d-flex flex-row mb-4 align-items-center">
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_3')?></span>
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_4')?></span>
            </div>
            <div class="d-flex flex-row mb-4 align-items-center">
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_5')?></span>
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_6')?></span>
            </div>
            <div class="d-flex flex-row mb-4 align-items-center">
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_7')?></span>
              <span class="bi bi-check-circle-fill p-2"> <?php echo get_theme_mod('gr_values_icon_text_8')?></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="bi bi-cart4 text-primary"></span>
            </div>
            <div class="text">
              <h2>We have an online store</h2>
              <p>Shop for medical and laboratory equipment and have them delivered to you</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="bi bi-award text-primary"></span>
            </div>
            <div class="text">
              <h2>Our Products</h2>
              <p>Medical equipment, 
                Medical consumables and
                Hospital Furniture</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="bi bi-truck text-primary"></span>
            </div>
            <div class="text">
              <h2>Shipping and Delivery Support</h2>
              <p>We deliver our medical supplies to your doorstep/clinic</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-image overlay" style="background-image: url('<?php echo get_theme_mod('gr_service_bg_about'); ?>');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-7">
            <p class="mb-0"><a href="https://shop.greywinghealthcare.com/" target="_blank" class="btn btn-outline-white">Go to Shop</a></p>
        </div>
        </div>
      </div>
    </div>
    <?php echo do_shortcode("[newsletter_form]"); ?>

<?php get_footer();?>