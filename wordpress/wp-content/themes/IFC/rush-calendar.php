<?php /* Template Name: rush-calendar-template */ ?>


<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container" z-index:2000 style="margin-top:50px;">
        
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>Recruitment Calendar</h1>
            </div>
        </div>

        

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
