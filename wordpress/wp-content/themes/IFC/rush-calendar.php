<?php /* Template Name: rush-calendar-template */ ?>


<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container" z-index:2000 style="margin-top:50px;">
        
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>Recruitment Calendar</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://calendar.google.com/calendar/embed?src=aWZjLmdyZWVrLmdhdGVjaC5lZHVfbzEwaGd1NnVzZGRybDJwazE3ZmUyYmZ1aDBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" style="border: 0" width="100%" height="750" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>

        <hr>

        <br>

        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p style="color:#263975; text-align:center">Questions? Comments? Concerns? Please feel free to contact our IFC President, Jack Corelli, as well as our Georgia Tech Greek Affairs Director, Jamison Keller, by clicking the "Contact Us" button!</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block contact-us-button" href="mailto:jamison.keller@studentlife.gatech.edu,president@ifc.greek.gatech.edu"  style="color:#FF2400; background-color:white;">CONTACT US</a>
                </div>
            </div>
        </div>

        <br>
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
