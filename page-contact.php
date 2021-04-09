<?php
/**Template Name:  Contact Us Page*/
?>
<?php get_header();?>

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0">
                <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Contact</strong>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-5 text-black">Get In Touch</h2>
            </div>
            <div class="col-md-12">
                <form action="#" method="post">
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">First Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname">
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="text-black">Last Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_subject" class="text-black">Subject </label>
                                <input type="text" class="form-control" id="c_subject" name="c_subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_message" class="text-black">Message </label>
                                <textarea name="c_message" id="c_message" cols="30" rows="7"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-black mb-4">Contacts</h2>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white mb-3 rounded">
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
            <div class="col-lg-4">
                <div class="p-4 bg-white mb-3 rounded">
                    <div class="block-5">
                        <ul class="list-unstyled">
                            <li class="phone"><a href="tel://+254 721 714498">+254 721 714498</a></li>
                            <li class="email"><a href="#">info@greywinghealthcare.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-white mb-3 rounded">
                    <div class="block-5">
                        <ul class="list-unstyled">
                            <li class="address">Viewpark Towers, Nairobi, Kenya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-7 d-flex align-items-center">
                <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for our weekly newsletter</h2>
            </div>
            <div class="col-md-5 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>