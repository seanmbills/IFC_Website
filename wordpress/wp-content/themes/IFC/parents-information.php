<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container" z-index:2000 style="margin-top:50px;">
        
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>Georgia Tech IFC Rush</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h3><strong>Parent Resources</strong></h3>
                <p><strong>Greek Life at Georgia Tech</strong>
                    <br>
                    Your son has embarked upon a great adventure by choosing to attend Georgia Tech. Your student has many opportunities ahead of him while at GT. By joining a fraternity, he is joining hundreds of other new members in their search for a sense of community at the university. Students can feel overwhelmed once they are in a new environment.

                    For many parents, the Greek community conjures up images of Animal House. That is simply not the reality! There are many myths about the Greek community, but the reality is that men and women in fraternities and sororities are committed to their academics, volunteer time in the community, develop and strengthen their leadership skills, and form a campus network with other Greeks.
                </p>
                <p><strong>Further resources:</strong>
                    While our website is more oriented towards prospective and current students, feel free to browse around, our <a target="_blank" href="http://fraternity.gatech.edu/faq.html">frequently asked questions"</a> section will assist you in learning more about what it means to be Greek at Georgia Tech. If you have further questions or for further information, please allow us to direct you to the <a target="_blank" href="http://greek.gatech.edu/">website of Greek Affairs</a>, where you can learn more and interact directly with the Dean of Greek Affairs.
                </p>
            </div>
        </div>

        <br>
        <hr>

        <div class="row">
            <div class="col-lg-12">
                <div style="text-align:center;">
                    <iframe style="width:100%; height:1000px;" src="//e.issuu.com/embed.html#30200822/63240254" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br>

        <hr>

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
