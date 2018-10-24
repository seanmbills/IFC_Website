<?php get_header(); ?>

    <div class="container" z-index:2000 style="margin-top:50px;">
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>RESOURCES</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6" style="text-align:center;">
                    <h3><strong>Online Forms</strong></h3>
                    <p>
                        <br>
                        Register a Social Event: <a href="https://orgsync.com/136187/forms/267312" target="_blank">Online Form</a>
                        <br>
                        <br>
                        <i><strong>*** IF YOU CANT FIND THIS FORM IT'S BECAUSE YOU AREN'T REGISTERED WITH IFC ON ORGSYNC.***</strong></i>
                        <br>
                        <br>
                        Submit a Public Relations Advertising Request: <a href="https://docs.google.com/forms/d/e/1FAIpQLSdXgp29nxZEu-iJf4eLjKy3iqF97cnYkbdcHjhyC7o0LYywjQ/viewform" target="_blank">Online Form</a>
                        <br>
                        <br>
                        OFSL Events Calendar: <a href="https://docs.google.com/spreadsheets/d/1VpwfnY0d315NyLRMAUaWKlX5dBtNcrpoWu6NEV7rG9Y/edit#gid=1182016483" target="_blank">Online Calendar</a>
                        <br>
                        <br>
                        Submit a Chapter Contact Request: <a href="https://orgsync.com/130926/forms/297517" target="_blank">Online Form</a>

                    </p>
                </div>
                <div class="col-lg-6" style="text-align:center;">
                    <h3><strong>Official Documents</strong></h3>
                    <br>
                    <p >
                        Dean Dull Competition Bylaws: <a href="https://docs.google.com/file/d/0B3WeSqXmmJ2BUWR4QTIwWmNXaDA/edit" target="_blank">Here</a>

                        <br>
                        <br>

                        IFC Bylaws: <a href="https://docs.google.com/document/d/1wFZ0m65tCbF90qMYzsuFFzXT1MYJ_MeY4Unb_xObVe0/edit?usp=sharing" target="_blank">Here</a>
                        <br>
                            1) <a href="https://docs.google.com/document/d/1wFZ0m65tCbF90qMYzsuFFzXT1MYJ_MeY4Unb_xObVe0/edit#heading=h.35nkun2" target="_blank">Social Policy</a>
                        <br>
                            2) <a href="https://docs.google.com/document/d/1wFZ0m65tCbF90qMYzsuFFzXT1MYJ_MeY4Unb_xObVe0/edit#heading=h.44sinio" target="_blank">Risk Management Policy</a>
                        <br>
                            3) <a href="https://docs.google.com/document/d/1wFZ0m65tCbF90qMYzsuFFzXT1MYJ_MeY4Unb_xObVe0/edit#heading=h.2jxsxqh" target="_blank">Recruitment Policy</a>
                        <br>
                        <br>
                        IFC Constitution: <a href="https://drive.google.com/file/d/1uXA55YtamxTYicTXhGmst8QCaQjr1xOidqailWQ439XNyqxs7LhK8YAZ_SGz/view" target="_blank">Here</a>
                        <br>
                        
                        Fraternal Code of Conduct: <a href="https://docs.google.com/file/d/0B3VJ5ScZj3u6SENTQk1XNUlzdDg/edit" target="_blank">Here</a>
                        <br>
                        
                        FIPG Policies: <a href="https://app.box.com/s/op1i6d8bbc09wtpfb4133bsdyifu8e2u" target="_blank">Here</a>
                        <br>
                        
                        Guide To Greek Life: <a href="https://issuu.com/georgiatechifc/docs/interfraternity_council_guide_2018_" target="_blank">Here</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h3><strong>Judicial Referral</strong></h3>
                <p>
                    If you would like to refer a fraternity to IFC's Judicial Board for a violation of the IFC Constitution, ByLaws, or Fraternal Code of Conduct, please email IFC's Executive Vice President at <a href="mailto:executivevp@ifc.greek.gatech.edu">executivevp@ifc.greek.gatech.edu</a>. Please make sure that your email includes the reason for referring the chapter along with all of the information you would like to submit. All submissions will remain anonymous unless otherwise requested.
                </p>
            </div>
        </div>

        <br>
        <hr>
        <br>

<?php get_footer(); ?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000, //changes the speed
        pause:'null',
        wrap:true
    });
    </script>

    <script>
        $(window).on("load", function() {
            if($(window).scrollTop() >= 0) {
                $(".navbar-header").addClass("scrolled-header");
                $(".navbar-inverse").addClass("scrolled");
                $(".navbar-nav>li>a").addClass("scrolled-dropdown");
                $(".navbar-brand").addClass("scrolled-brand");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".navbar-header").removeClass("scrolled-header");
               $(".navbar-inverse").removeClass("scrolled");
               $(".navbar-nav>li>a").removeClass("scrolled-dropdown");
               $(".navbar-brand").removeClass("scrolled-brand");
            }
        });
    </script>

</body>

</html>