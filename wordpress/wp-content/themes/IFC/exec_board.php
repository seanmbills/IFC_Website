<?php /* Template Name: exec-template */ ?>


<?php get_header(); ?>

    <div class="container" z-index:2000 style="margin-top:50px;">

        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>Exec Officers</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">President</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/President.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('president_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('president_phone'); ?>"><?php the_field('president_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:president@ifc.greek.gatech.edu">president@ifc.greek.gatech.edu</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Executive VP</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/ExecutiveVP.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('evp_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('evp_phone'); ?>"><?php the_field('evp_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:executivevp@ifc.greek.gatech.edu">executivevp@ifc.greek.gatech.edu</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Administrative VP</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/AdministrativeVP.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('avp_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('avp_phone'); ?>"><?php the_field('avp_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:adminvp@ifc.greek.gatech.edu">adminvp@ifc.greek.gatech.edu</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Programming VP</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/ProgrammingVP.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('pvp_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('pvp_phone'); ?>"><?php the_field('pvp_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:programmingvp@ifc.greek.gatech.edu">programmingvp@ifc.greek.gatech.edu</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Recruitment VP</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/RecruitmentVP.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('rvp_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('rvp_phone'); ?>"><?php the_field('rvp_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:recruitmentvp@ifc.greek.gatech.edu">recruitmentvp@ifc.greek.gatech.edu</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Finance VP</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/FinanceVP.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('fvp_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('fvp_phone'); ?>"><?php the_field('fvp_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:financevp@ifc.greek.gatech.edu">financevp@ifc.greek.gatech.edu</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-2 col-md-2">

                </div>
                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Communications VP</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/CommunicationsVP.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('cvp_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('cvp_phone'); ?>"><?php the_field('cvp_phone'); ?></a></p>
                            <!-- <br> -->
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:communicationsvp@ifc.greek.gatech.edu">communicationsvp@ifc.greek.gatech.edu</a></p>
                            <!-- <br> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 exec-photo-container">
                    <h2 style="text-align:center;">Rush Chairman</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Exec Photos/RushChairman.jpg" class="thumbnail img-responsive exec-photo" style="margin:auto; margin-bottom:5px;">
                    <div class="exec-transition">
                        <div class="exec-info-text">
                            <h3><?php the_field('rush_chairman_name'); ?></h3>
                            <p style="font-size:18px!important;"><strong>Phone: </strong><a href="tel:<?php the_field('rush_chairman_phone'); ?>"><?php the_field('rush_chairman_phone'); ?></a></p>
                            <p style="font-size:18px!important;"><strong>Email: </strong><a href="mailto:rush@ifc.greek.gatech.edu">rush@ifc.greek.gatech.edu</a></p>
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
