<?php /* Template Name: chairmen-template */ ?>


<?php get_header(); ?>

    <div class="container" z-index:2000 style="margin-top:50px;">

        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>Committee Chairmen</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Finance</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/FinanceChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('finance_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('finance_phone'); ?>"><?php the_field('finance_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('finance_email'); ?>"><?php the_field('finance_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('finance_greek'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Greek Excellence</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/GreekExcellenceChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('ge_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('ge_phone'); ?>"><?php the_field('ge_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('ge_email'); ?>"><?php the_field('ge_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('ge_greek'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">GNA</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/GNAChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('gna_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('gna_phone'); ?>"><?php the_field('gna_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('gna_email'); ?>"><?php the_field('gna_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('gna_greek'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Philanthropy</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/PhilanthropyChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('philanthropy_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('philanthropy_phone'); ?>"><?php the_field('philanthropy_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('philanthropy_email'); ?>"><?php the_field('philanthropy_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('philanthropy_greek'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Programming</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/ProgrammingChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('programming_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('programming_phone'); ?>"><?php the_field('programming_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('programming_email'); ?>"><?php the_field('programming_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('programming_greek'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Public Relations Chair</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/PRChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('pr_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('pr_phone'); ?>"><?php the_field('pr_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('pr_email'); ?>"><?php the_field('pr_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('pr_greek'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Scholarship</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/ScholarshipChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('scholarship_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('scholarship_phone'); ?>"><?php the_field('scholarship_phone'); ?></a></p>
                            <!-- <br> -->
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('scholarship_email'); ?>"><?php the_field('scholarship_email'); ?></a></p>
                            <!-- <br> -->
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('scholarship_greek'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Social</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/SocialChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('social_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('social_phone'); ?>"><?php the_field('social_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('social_email'); ?>"><?php the_field('social_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('social_greek'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Technology</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/TechChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('technology_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('technology_phone'); ?>"><?php the_field('technology_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('technology_email'); ?>"><?php the_field('technology_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('technology_greek'); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-md-4 col-sm-4">

                </div>

                <div class="col-md-4 col-sm-4  exec-photo-container">
                    <h2 style="text-align:center;">Greek Week</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chairmen Pictures/GreekWeekChair.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('gw_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('gw_phone'); ?>"><?php the_field('gw_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:<?php the_field('gw_email'); ?>"><?php the_field('gw_email'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Organization: </strong><?php the_field('gw_greek'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <br>
        <br>
        <?php get_footer(); ?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 10000 //changes the speed
    });
    </script>

    <script>
        $(window).on("load", function() {
            if($(window).scrollTop() >= 0) {
                $(".navbar-inverse").addClass("scrolled");
                $(".navbar-nav>li>a").addClass("scrolled-dropdown");
                $(".navbar-brand").addClass("scrolled-brand");
                $(".navbar-header").addClass("scrolled-header");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $(".navbar-inverse").removeClass("scrolled");
               $(".navbar-nav>li>a").removeClass("scrolled-dropdown");
               $(".navbar-brand").removeClass("scrolled-brand");
               $(".navbar-header").removeClass("scrolled-header");
            }
        });
    </script>

</body>

</html>
