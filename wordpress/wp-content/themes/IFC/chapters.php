<?php /* Template Name: chapters-template */ ?>


<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container" z-index:2000 style="margin-top:50px;">

        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>Chapters</h1>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Alpha Epsilon Pi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/alpha_epsilon_pi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.aepiModal').modal('show');">
                </div>

                <!-- modal for AEPi's info. -->
                <div class="modal fade aepiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <!-- onclick="$('.aepiModal').modal('hide');"  -->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->

                        <div class="modal-content">

                            <!-- <button type="button" style="z-index:1000;" class="close" data-dismiss="modal">&times;</button> -->
                            <div id="carousel-controls-aepi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/AlphaEpsilonPi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/AlphaEpsilonPi2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/AlphaEpsilonPi3.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                </div>


                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-aepi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".zbtModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-aepi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".alphaSigModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Alpha Epsilon Pi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7 col" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Alpha Epsilon Pi has been growing rapidly over the past few years,not only in number, but also in campus presence. AEPi is the nation’s largest consistently Jewish fraternity and still remains as the only Jewish fraternity on Georgia Tech’s campus. We have brothers involved in Ramblin' Reck Club, IFC, Freshman Council, Lambda Sigma, and many other organizations. We always have a strong presence in SGA. This year we are led by incoming student body president Eran Mordel who proudly calls himself an AEPi. As always, our social calendar is packed with events including beach weekend, an out of town Formal, Semi-Formal, date nights, sorority mixers, and several large parties each semester. Our brotherhood events like Family Olympics and Brotherhood Classic provide a great chance for competition and bonding between the whole brotherhood. When it comes to athletics, AEPi strikes fear into the hearts of its opponents when we compete in campus intramurals. We have consistently made playoffs in every event, and have gone on to finals in more intramurals than we can name. When it comes to philanthropy, AEPi commits itself fully. This year, we hosted a week long blood drive with the American Red Cross where hundreds of Tech students donated. Our brotherhood consists of a mixture of people from all around the US and even a few from other countries. The only attribute we all have in common is our Judaism. This lends to a diverse brotherhood, allowing our members to gain whatever they want out of AEPi. Our mid-sized house allows for brothers to get involved both within the fraternity, and in the Georgia Tech community. Its location across the street from Bobby Dodd Stadium makes for great tailgating and post-victory celebrations come Fall. Even with all this extra-curricular activity, AEPi will always make school a priority. Our average GPA is consistently higher than the greek average, with our most recent pledge class having one of the top GPAs of any fraternity's pledge class. It is a great time to be an AEPi and we hope you check us out during rush week to see what we can offer you.
                                        </p>
                                    </div>
                                    <div class="col-md-5 col" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/alpha_epsilon_pi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Zeta  <br>
                                            <strong>Chapter Nickname:</strong> AEPi     <br>
                                            <strong>President's Name:</strong> <?php the_field('aepi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('aepi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('aepi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gtaepizeta/?ref=br_rs" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtaepizeta" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gtaepizeta" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.aepizeta.com/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Alpha Sigma Phi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/alpha_sigma_phi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.alphaSigModal').modal('show');">
                </div>

                <!-- modal for Alpha Sig's info. -->
                <div class="modal fade alphaSigModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-alphaSig" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/AlphaSigmaPhi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="<./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-alphaSig" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".aepiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-alphaSig" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".atoModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-lg-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Alpha Sigma Phi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7 col" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Joining a fraternity is an investment in your future that begins with Rush. Alpha Sigma Phi is an excellent opportunity to get the most out of your investment while enhancing your experience at Tech. Like our Founders at Yale in 1845, we came together in 2011 to become the newest chapter on Tech’s campus. Our brothers are engaged on campus, throughout Atlanta, and nationally with our extensive network of alumni. As a top 5 scholastic fraternity, we prioritize and excel in academics. Resources like weekly study groups are available for academic assistance. Our chapter also enjoys acalendar filled with formals, sorority mixers, sorority dinners, and date nights as well as brotherhood events including retreats, camping trips, ski trips, and our annual Savannah St. Patrick’s Day trip. Additionally, our involvement in both local and national philanthropiesallows us to capitalize on our fraternal value of Charity. We are devoted to building strong character, developing lifelong relationships, and working together to prepare you for your future as a leader. Come see us at Rush to learn more about how you can get invested in an opportunity that will change your life while giving you the tools to “Better the Man”
                                        </p>
                                    </div>
                                    <div class="col-md-5 col" style="position:relative;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/alpha_sigma_phi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Tech  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('alphasig_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('alphasig_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('alphasig_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gtalphasig/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtalphasig" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTAlphaSig" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://gatech.alphasigmaphi.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>



                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Alpha Tau Omega</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/alpha_tau_omega.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.atoModal').modal('show');">
                </div>

                <!-- modal for ATO's chapter info -->
                <div class="modal fade atoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-ato" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <img style="width:100%; height:auto;" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/AlphaTauOmega1.png" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/AlphaTauOmega2.png" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-ato" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".alphaSigModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-ato" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".betaModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Alpha Tau Omega</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Chartered on September 18, 1888, the Beta Iota Chapter of the Alpha Tau Omega Fraternity has played an intricate role in the operations and development of Georgia Tech. Being the first fraternity on campus, ATO prides itself on it’s high standards of achievement and campus involvement. On campus we hold leadership positions on IFC, The Student Center, Ambassadors, Executive Round Table, FASET and more. ATO’s philosophy is to produce great leaders with strong character, while still providing a well-balanced college experience. Our house maintains this balance through a focus on academics, intramurals, campus leadership and social events. We continue to rank among the top in all of these categories year in and year out. Every Fall, we lay over 40 tons of sand on our front yard to host Tech’s largest fraternity party, the ATO Hawaiian Weekend. Along with our Mountain Semi-Formal weekend, Formal, Viking Party, date nights and mixers we have one of the best social calendars on campus.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/alpha_tau_omega.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Beta Iota  <br>
                                            <strong>Chapter Nickname:</strong> ATO   <br>
                                            <strong>President's Name:</strong> <?php the_field('ato_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('ato_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('ato_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/ATOGT/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/atogt" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/ATOGT" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gtato.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Beta Theta Pi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/beta_theta_pi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.betaModal').modal('show');">
                </div>

                <!-- modal for ATO's chapter info -->
                <div class="modal fade betaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-beta" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/BetaThetaPi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/BetaThetaPi2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-beta" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".atoModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-beta" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".chiPhiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Beta Theta Pi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Beta Theta Pi, founded in 1839, has a strong history of excellence. The Gamma Eta chapter here at Georgia Tech is no exception. Founded in 1916, our Chapter has won the James E. Dull Best Overall Fraternity Award 30 of the past 36 years. We pride ourselves on living out our principles of mutual assistance, cultivation of the intellect, and integrity. As a Brotherhood, we are well-rounded. While our Brothers are active leaders across campus, involved with everything from the Undergraduate Judiciary Cabinet to Student Ambassadors, and prolific Student Athletes, with full teams in each intramural, we consistently maintain a chapter GPA that exceeds both the All Men’s Average and All Men’s Fraternity Average. Along with these involvements we enjoy an active social calender with a hearty mix of date nights, weekend retreats, and mixers.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/beta_theta_pi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Gamma Eta  <br>
                                            <strong>Chapter Nickname:</strong> Beta     <br>
                                            <strong>President's Name:</strong> <?php the_field('beta_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('beta_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('beta_email'); ?>‬ <br>
                                        </p>


                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/BetaThetaPiGeorgiaTech/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gatechbeta" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>

                                            <a target="_blank" href="https://www.gtbeta.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->

            </div> <!-- closes col-lg-12 -->
        </div>


        <!-- start of second row -->
        <div class="row">
            <div class="col-lg-12">


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Chi Phi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/chi_phi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.chiPhiModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade chiPhiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-chiPhi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/ChiPhi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-chiPhi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".betaModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-chiPhi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".chiPsiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Chi Phi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Founded upon the values of Truth, Honor, and Personal Integrity, Chi Phi was established on December 24, 1824. Chi Phi remains the oldest College Social Fraternity in the Nation. We pride ourselves on our diversity as a Chapter and take pride in the experiences and skillsets one learns. The ideals and values instilled in a Chi Phi transform him into a young man not only ready for the work force, but for leading a strong well-rounded life. The Omega chapter promotes an environment that aims to mold our brothers into leaders by becoming involved not only within the chapter but also on campus and within the community. Our brothers are involved in a variety organizations that include the Ramblin’ Reck Club, Rugby Team, FASET, Air Force ROTC, GT Ambassadors, Lacrosse Team, Sky Diving Club, and Connect with Tech. Academics are extremely important to the brothers at Chi Phi. Brothers sign up for classes together, study together and hold each other accountable, while the chapter rewards those with outstanding grades and creates incentives to do well. Our social calendar provides a great balance to the rigorous academia of Georgia Tech with activities such as Formals, date nights, band parties, camping trips, and brotherhood bonding events like rock climbing and ropes courses. Not all planning efforts are centered around social activities. Chi Phi also instills the importance of giving back to the community through various service projects throughout the year. Our two main philanthropy events include Halloween for Hunger to collect canned goods in the fall and the All-Greek Chili Cook-Off in the spring that benefits the Boys and Girls Club of Atlanta. Halloween for hunger involves all the brothers dressing up and trick-or-treating for canned goods to benefit the food bank of Atlanta. Chi Phi gives all its members not only a life transforming experience, but a family and home away from home. We invite you to stop by and see what the oldest college social Fraternity in the nation has to offer you.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/chi_phi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Omega  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('chiphi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('chiphi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('chiphi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/ChiPhiatGaTech/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtchiphi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/chiphi" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://gtchiphi.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Chi Psi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/chi_psi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.chiPsiModal').modal('show');">
                </div>

                <!-- modal for Chi Psi's info. -->
                <div class="modal fade chiPsiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-chiPsi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/ChiPsi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/ChiPsi2.JPG" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-chiPsi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".chiPhiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-chiPsi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".deltaChiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Chi Psi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Founded on May 20, 1841, Chi Psi is a Fraternity of gentlemen dedicated to the needs of its members. Chi Psi was the first Fraternity established around the social aspects of brotherhood and we remain a very close-knit group. We strive to keep academics the main priority to ensure outstanding academic performance. Our members are active in Ramblin Reck Club, ROTC, band, and several other campus organizations. We also actively participate in philanthropy events, Greek Week, Homecoming, and several intramural sports each semester. We raised over $4,000 for Relay for Life, second highest overall, and also volunteer at the Fernbank Museum every month. In Homecoming, we placed 2nd in the Wreck Parade and vastly improved in our Greek Week finish. This past year, our social calendar included Date Nights, a Blacklight party, a Superbowl party, and our Redneck Weekend, a brotherhood camping trip. We also held a Formal in New Orleans. The Brothers of Chi Psi welcome you to Georgia Tech and look forward to meeting you.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/chi_psi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Iota Delta  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('chipsi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('chipsi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('chipsi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gtchipsi/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtchipsi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTChiPsi" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://gtchipsi.org" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Delta Chi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_chi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.deltaChiModal').modal('show');">
                </div>

                <!-- modal for Delta Chi's chapter info -->
                <div class="modal fade deltaChiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-deltaChi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/DeltaChi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-deltaChi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".chiPsiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-deltaChi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".deltaSigModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Delta Chi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            In its twentieth year, the Georgia Tech Chapter of Delta Chi still prides itself on its four founding principles: that friends are always welcome, hazing will not occur, academics come first, and others are to be treated with chivalry. Delta Chi’s commitment to excellence has been well recognized over the years. The Georgia Tech Chapter has been awarded the President’s Cup, the highest honor bestowed by our headquarters, for thirteen of the past fifteen years. Delta Chi has also won the North-American Interfraternity Conference's Award of Distinction twice, the only chapter to do so. The chapter also maintains a busy social calendar filled with events such as our White Carnation Formal held recently in Nashville. Our Wreck the Deck and Reggae Weekend band parties highlight each semester along with great brotherhood events such as overnight camping retreats and ski trips in the Rocky Mountains. We invite you to stop by and find out what makes Delta Chi “The Brotherhood of a Lifetime.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_chi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Tech  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('deltachi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('deltachi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('deltachi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTDeltaChi/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtdeltachi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>

                                            <a target="_blank" href="http://www.gtdeltachi.com" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Delta Sigma Phi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_sigma_phi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.deltaSigModal').modal('show');">
                </div>

                <!-- modal for Delta Sig's chapter info -->
                <div class="modal fade deltaSigModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-deltaSig" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img style="width:100%; height:auto;" class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/DeltaSigmaPhi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-deltaSig" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".deltaChiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-deltaSig" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".dtdModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Delta Sigma Phi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Our chapter of Delta Sigma Phi was established at Georgia Tech on January 10, 1920, and as the years went on, we became the first IFC chapter on campus to become racially integrated. Even today, our diversity allows each of our 70 gentlemen to grow much more than they otherwise would. We stand proud of our achievements: doing 830 hours of community service last year, being involved in more than 100 campus organizations, and truly coming together as a family. Among our men are 4 SGA Reps, 2 IFC Execs, 9 Tour Guides, and Presidents of 5 campus organizations. We reward our brothers for their hard work with tailgating and cheering together for football games, holding the annual Carnation Ball formal, taking retreats to go camping, skiing, fishing, and golfing, and mixing with sororities at social and philanthropic events. Our signature event, Shipwreck, is a band party that attracts hundreds of students 3 days a year. This Rush, we’re looking for men with quality character, regardless of race, creed, or religion. We’re looking for the future campus leaders to join our ranks. We invite you to join us during rush to experience for yourself the strength of our brotherhood.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_sigma_phi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Gamma  <br>
                                            <strong>Chapter Nickname:</strong> Delta Sig     <br>
                                            <strong>President's Name:</strong> <?php the_field('deltasig_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('deltasig_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('deltasig_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/godeltasig/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtdeltasig" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTDeltasig" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://godeltasig.com/index.html" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->
            </div> <!-- closes col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Delta Tau Delta</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_tau_delta.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.dtdModal').modal('show');">
                </div>

                <!-- modal for AEPi's info. -->
                <div class="modal fade dtdModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-dtd" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/DeltaTauDelta1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-dtd" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".deltaSigModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-dtd" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".deltaUpsilonModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Delta Tau Delta</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Delta Tau Delta was founded in 1858, by eight men at the campus of Bethany College in West Virginia. Since that time, Delta Tau Delta has become one of the most active and progressive fraternities in the nation. Chapters and colonies of our fraternity are found on over 120 campuses throughout the United States and Canada. In 150 years more than 150,000 men have accepted the Delt challenge to commit to excellence. Locally our chapter was founded in 1921. Our brothers excel in academics, ranking 7th overall, as well as intramural sports, where we consistently make all playoffs. During the school year we enjoy several off campus trips. In September we relax with our Beach Weekend trip to Florida. Then in October we host our Semiformal at a prestigious location in Atlanta. During the spring semester we head up to the mountains for our Cabin Fever Retreat. At the end of the semester we conclude the year with our Spring Formal, booking an upscale hotel on the beach. But, as Delts we pride ourselves on the parties that we host on campus. Our annual Camo, White, Halloween, Delts of Hazard, Christmas, Bacchannalia, and St. Patrick’s Day parties are well-known on Tech’s campus, along with our football tailgates and Homecoming festivities.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_tau_delta.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Gamma Psi  <br>
                                            <strong>Chapter Nickname:</strong> Delt     <br>
                                            <strong>President's Name:</strong> <?php the_field('dtd_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('dtd_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('dtd_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTDelt/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtdeltataudelta" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gt_delt" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://gatech.deltsconnect.org" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Delta Upsilon</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_upsilon.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.deltaUpsilonModal').modal('show');">
                </div>

                <!-- modal for Alpha Sig's info. -->
                <div class="modal fade deltaUpsilonModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-deltaUpsilon" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/DeltaUpsilon1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/DeltaUpsilon2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-deltaUpsilon" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".dtdModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-deltaUpsilon" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".kaModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Delta Upsilon</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            DU was founded upon the principals of non-hazing and non-secrecy and we strive to build better men through our fraternity experience. What we are looking for in a potential new members above all else is someone who is genuine and authentically themselves. Along with heavy involvement in almost every facet of on campus life, we as a fraternity also participate in school-wide events and traditions. One tradition of our own is fundraising annually for St. Baldrick’s, an organization working to raise money for childhood cancer research. Our efforts have resulted in over $100,000 being raised in the last 5 years. Additionally, we provide opportunities to our brothers that they would not have had before DU including fun trips to the mountains and to the beach, and more professional and academic opportunities like mentoring for internships and research. We have a strong focus on academics, philanthropy, and diversity, and an all encompassing priority on the betterment of each brother. DU is a diverse brotherhood with many different interests and backgrounds who push each other to be the best they can be.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/delta_upsilon.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Tech  <br>
                                            <strong>Chapter Nickname:</strong> DU     <br>
                                            <strong>President's Name:</strong> <?php the_field('du_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('du_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('du_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gtdeltau/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtdeltaupsilon" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gtdu" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gtdu.org" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Kappa Alpha Order</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/kappa_alpha.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.kaModal').modal('show');">
                </div>

                <!-- modal for ATO's chapter info -->
                <div class="modal fade kaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-kappaSig" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="margin-top:-5%; width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/KappaAlphaOrder1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-ka" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".deltaUpsilonModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-ka" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".kappaSigModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Kappa Alpha Order</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            The Alpha Sigma chapter of the Kappa Alpha Order was established at Georgia Tech in 1899. KA seeks to create a lifetime experience with a focus on excellence, service, leadership, reverence, and gentility. We strive to excel in academics, athletics, philanthropy, and campus involvement. Our social calendar consists of a variety of events, including band parties and date nights, as well as our annual Cowboy Ball, Convivium celebrations. Nowhere else on Georgia Tech’s campus will you find an establishment with more heritage and circumstance; if tradition interests you, then you’ve certainly come to the right place.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/kappa_alpha.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Sigma  <br>
                                            <strong>Chapter Nickname:</strong> KA     <br>
                                            <strong>President's Name:</strong> <?php the_field('ka_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('ka_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('ka_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/Kappa-Alpha-Order-Georgia-Tech-105621239495886/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>

                                            <a target="_blank" href="https://kagatech.2stayconnected.com" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Kappa Sigma</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/kappa_sigma.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.kappaSigModal').modal('show');">
                </div>

                <!-- modal for ATO's chapter info -->
                <div class="modal fade kappaSigModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-kappaSig" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="margin-top:-5%; width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/KappaSigma1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-kappaSig" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".kaModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-kappaSig" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".lambdaChiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Kappa Sigma</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            The Kappa Sigma Fraternity was founded in the year 1400 at the University of Bologna and came to America in the year 1869, making it one of the best recognized organizations both in America and internationally. Georgia Tech’s Alpha Tau chapter of Kappa Sigma was founded in 1895 and remains one of the strongest chapters throughout the nation. The chapter’s allegiance to its four principles: Fellowship, Leadership, Scholarship, and Service has yielded a 115-year history on campus full of tradition as well as a legacy of excellence.Currently, our chapter consists of more than 75 Brothers and spans across numerous involvements on campus. We have a strong alumni base in the greater Atlanta area that constantly supports our undergraduate brothers. With members in over 20 student organizations including the GT Rugby team, the Ramblin’ Reck Club, Connect with Tech, the GT Soccer team, Freshman Activities Board and the Water Ski Club, the brothers make an unrivaled impact at Tech. One of our members currently serves on the Executive Board of the Interfraternity Council.The chapter celebrates the Tech Homecoming and Greek Weeks by competing in their traditional events. Kappa Sigma received First Place in Homecoming display in Fall 2010.Also, Kappa Sigma is very active in fraternal and independent intramural sports, and won the 2010 Softball Championship.The Kappa Sigma fraternity at Georgia Tech is a determined group of young men who hope to continue in tradition and achievement on and off campus.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/kappa_sigma.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Tau  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('kappasig_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('kappasig_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('kappasig_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTKappaSigma/?ref=br_rs" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/kappasigmagt" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/kappasigmagt" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://gtkappasig.com/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->
            </div> <!-- closes col-lg-12 -->
        </div>

        <!-- start of second row -->
        <div class="row">
            <div class="col-lg-12">



                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Lambda Chi Alpha</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/lambda_chi_alpha.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.lambdaChiModal').modal('show');">
                </div>

                <!-- modal for ATO's chapter info -->
                <div class="modal fade lambdaChiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-lambdaChi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/LambdaChiAlpha1.JPG" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-lambdaChi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".kappaSigModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-lambdaChi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".phiDeltModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Lambda Chi Alpha</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Lambda Chi Alpha has long stood as one of the largest and most active social fraternities on Georgia Tech’s campus. Throughout the calendar year, we recruit men of values who are looking to maximize their own potential while helping us strive for success in the athletic arena (soccer and frisbee are strengths, with basketball a close third), in the classroom (our chapter GPA is consistently in the upper echelon of all campus demographics), in Tech’s many clubs and organizations (many of our brothers are campus leaders), on the streets serving the community (our North American Food Drive serves the Atlanta Community Food Bank), and of course, on the social scene (our semesters are filled with band parties, date nights, mixers with sororities, and much more).In short, our goal is to make good men into great men by providing them with the ideal environment, circumstances, and support system in which they can thrive. Lambda Chi traditionally participates strongly in both Homecoming Week (with insane wreck contraptions and huge displays) and Greek Week (we started the tradition that is still the centerpiece of the week, TUG), and we always have a great turnout of both alumni and active brothers for Georgia Tech football gamedays in the fall. Our chef, John, who has been running our kitchen for over ten years now, was recently initiated as a brother and is a great asset to our house, which is one of the largest on campus (houses 54 year-round) and was renovated as recently as 2005.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/lambda_chi_alpha.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Beta Kappa  <br>
                                            <strong>Chapter Nickname:</strong> Lambda Chi     <br>
                                            <strong>President's Name:</strong> <?php the_field('lambdachi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('lambdachi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('lambdachi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/pages/Lambda-Chi-Alpha-Fraternity/116430448378771" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/lambdachialpha_gt" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTLambdaChi" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gtlambdachi.com/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Delta Theta</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_delta_theta.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.phiDeltModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade phiDeltModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-phiDelt" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiDeltaTheta1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-phiDelt" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".lambdaChiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-phiDelt" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".fijiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Phi Delta Theta</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Since 1902, the Georgia Delta chapter of Phi Delta Theta has been a powerful presence on Georgia Tech’s campus, initiating over 2,000 members into our brotherhood. We strive to excel in all aspects of college life including academics, athletics, philanthropy, social life, and brotherhood. Our commitment to scholarship has helped Phi Delt consistently have one of the highest GPAs on campus over the past decade. Phi Delt also stands out in campus intramurals, ranking in the top 3 fraternities over the past 2 years, and playing in school championships for soccer, football, corn hole and several other sports. Not only do we participate in intramurals, but Phi Delts can be found on the varsity football team and the lacrosse, soccer and wrestling teams. Each year we hold and participate in several events to benefit our national philanthropy, the ALS association, including our annual golf tournament benefit and the annual ALS walk at Centennial Olympic Park. Our chapter also has a very strong social calendar including local date nights, sorority mixers, Fall semi-formal, and Spring formal. In addition to that, we host several band parties throughout the year. Our biggest band party, Rasta Phi, most recently featured Yung Joc, and has in the past sported artists like the Ying Yang Twins and Afroman. Being a brother of Phi Delta Theta lasts more than four years - it lasts a lifetime. We take our fraternity brotherhood very seriously, allowing us to have close ties with famous local alumni such as Ben Tarbutton, Jim Borders, C.J. Silas, and Sam Nunn. Phi Delt continues to produce leaders throughout campus, with members in organizations like College of Republicans, FASET, IFC, Connect With Tech, SCUBA tech, Student Center Programs Council, SGA, and Greek Week &amp; Homecoming committees. Our fraternity has been producing fine young men at Tech and all over North America for over a century and we hope you too will consider being part of Phi Delta Theta, the Standard for Brotherhood at Georgia Tech.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_delta_theta.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Delta  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('phidelt_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('phidelt_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('phidelt_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTPhiDeltaTheta/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtphideltatheta" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTPhiDeltaTheta" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://gatech.phideltatheta.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Gamma Delta</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_gamma_delta.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.fijiModal').modal('show');">
                </div>

                <!-- modal for Chi Psi's info. -->
                <div class="modal fade fijiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-fiji" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiGammaDelta1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-fiji" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".phiDeltModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-fiji" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".phiPsiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Phi Gamma Delta</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            We are the Gamma Tau chapter of Phi Gamma Delta (FIJI), a national fraternity with 147 active chapters across the United States and Canada. Since our chapter’s founding in 1926, we have enjoyed a rich brotherhood of both undergraduates and graduates including the likes of G. Wayne Clough and Russ A. Chandler among others. We have been housed at Landon-Nelson Hall since 2013 and are excited to perpetuate our values of friendship, knowledge, service, morality, and excellence through our scholarship, philanthropy, involvement, and athletics.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_gamma_delta.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Gamma Tau  <br>
                                            <strong>Chapter Nickname:</strong> FIJI     <br>
                                            <strong>President's Name:</strong> <?php the_field('fiji_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('fiji_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('fiji_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GeorgiaTechFiji/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/georgiatechfiji" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>

                                            <a target="_blank" href="https://www.gtfiji.com/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Kappa Psi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_psi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.phiPsiModal').modal('show');">
                </div>

                <!-- modal for Delta Chi's chapter info -->
                <div class="modal fade phiPsiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-phiPsi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="margin-bottom:-10%" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiKappaPsi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>


                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-phiPsi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".fijiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-phiPsi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".phiSigModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Phi Kappa Psi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Phi Kappa Psi (Phi Psi) is a diverse brotherhood of honorable gentlemen who strive for scholastic, athletic and social excellence. Phi Kappa Psi is the largest national foundation of any Fraternity and we boast hundreds of successful alumni ranging from former president Woodrow Wilson to the famous TV actor Zach Braff. As the winners of our National fraternity’s highest GPA for our district, we aim to further academic excellence by encouraging and requiring academic sessions and study hours from all our brothers. This has proven to be helpful, as a good amount of our brothers have continued to excel academically. In addition to academic excellence, Phi Psi aims to establish and build campus relations by consistently participating in intramurals; from football to soccer to racquetball, we value competition as well as building teamwork and friendships. While we do view intramurals as being very important, our school involvement is not limited to only sports. Last spring and fall semesters we participated (with great success) in Georgia Tech’s Greek week and Homecoming week. We had an outstanding top 10 finish in Greek Week and also an equally impressive showing at Homecoming. For Homecoming we also had a high participation in TeamBuzz, Georgia Tech’s homecoming day of service. At TeamBuzz we spent the whole day working at a local elementary school, building benches and flowerbeds. Since Phi Psi was founded on the “great joy of serving others” our philanthropy involvement does not stop there. We have volunteered with Relay for Life, St. Baldrick’s Foundation and continue to build a strong relationship with our national philanthropic organization, The Boys and Girls club. Above all being a Phi Psi is about forming strong bonds of friendship that that will last a lifetime.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_psi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Beta  <br>
                                            <strong>Chapter Nickname:</strong> Phi Psi     <br>
                                            <strong>President's Name:</strong> <?php the_field('phipsi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('phipsi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('phipsi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/Phi-Kappa-Psi-Georgia-Tech-85390843914/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>

                                            <a target="_blank" href="https://twitter.com/pkpgeorgiatech" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://gtphipsi.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->
            </div> <!-- closes col-lg-12 -->
        </div>


        <!-- start of second row -->
        <div class="row">
            <div class="col-lg-12">



                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Kappa Sigma</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_sigma.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.phiSigModal').modal('show');">
                </div>

                <!-- modal for Delta Sig's chapter info -->
                <div class="modal fade phiSigModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-phiSig" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiKappaSigma1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-phiSig" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".phiPsiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-phiSig" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".phiTauModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Phi Kappa Sigma</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            For over 100 years, Phi Kappa Sigma, also known as the Skull House, has been an active member of the Georgia Tech community. The name Skull House is derived from our initial founding father, Dr. Samuel Wylie Brown Mitchell, who served as a physician for the Union Army in the Civil War. The symbol of physicians was the skull and cross bones, and we uphold that honorable distinction in our traditions. During our years on the Tech campus, we have developed a strong and diverse brotherhood. We have a great deal of social activities during the year, such as our semi-formal during the spring, Brother Retreats, and the Black and Gold Formal each fall. In addition, every spring semester we host Oozeball, where we dig a mud volleyball pit in our yard and host an all-day tournament. It is also our annual fundraising event and all proceeds go to the Leukemia and Lymphoma Society of America. The chapter is also active in many campus activities, playing intramural sports such as flag football, softball, and basketball, and participating in the annual Greek Week and Homecoming events. At Phi Kappa Sigma we teach our members to become “Men of Honor.” With our smaller size we are able to get to know one another as a Brother and are able to build our members into better men and better students. We encourage our members to enjoy the college experience, but it is the Brotherhood that we have built together that separates Phi Kappa Sigma from other organizations on campus. We hope to see you this fall during Rush, and wish you the best of luck at Georgia Tech. If you have any questions about Phi Kappa Sigma, please email our Rush Chair.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_sigma.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Nu  <br>
                                            <strong>Chapter Nickname:</strong> Skull House     <br>
                                            <strong>President's Name:</strong> <?php the_field('skullhouse_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('skullhouse_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('skullhouse_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/pages/Phi-Kappa-Sigma-Fraternity/116322155063365" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtskulls" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTSkulls" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://www.gtskulls.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Kappa Tau</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_tau.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.phiTauModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade phiTauModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-phiTau" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="margin-top:-10%; margin-bottom:-10%;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiKappaTheta1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" style="margin-top:-10%; margin-bottom:-10%;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiKappaTheta2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-phiTau" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".phiSigModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-phiTau" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".phiKappaThetaModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Phi Kappa Tau</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            <strong>Philanthropic Efforts</strong><br>
                                            The Serious Fun Children’s Network was created by actor, racecar driver, brother of Phi Kappa Tau Paul Newman (Ohio ’43) in 1988. This series of summer camps were designed for children facing life threatening illnesses to be able to escape the fear and isola on
                                            of their medical condi ons and, in his words “raise a li le hell.” From humble beginnings in Ashford, Connec cut the Network has grown to 29 camps worldwide serving more than 1,000,000<br>
                                            <strong>About our Brotherhood</strong><br>
                                            Establishing itself this fall, Phi Kappa Tau is the latest addition to the Georgia Tech Fraternity community.
                                            With Phi Kappa Tau being new to this campus the opportunity presents itself to create a unique iden ty for this brotherhood. Academics, leadership, and service are our ‘what’ and the how is up to you. Using diversity and transparency as the primary tools we are looking to build a fraternity that will create a tradi on of excellence on this campus for many years to come. With the help of over 1,000 area alumni and hundreds of undergraduates at nearby universi es this colony will quickly become one of our top groups in the na on.
                                            All we need now is you.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_tau.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Rho Colony  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('phitau_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('phitau_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('phitau_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTPhiKappaTau/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gt_phitau" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GT_PhiTau" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://www.phikappatau.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Kappa Theta</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_theta.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.phiKappaThetaModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade phiKappaThetaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-phiKappaTheta" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="margin-top:-10%; margin-bottom:-10%;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiKappaTheta1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" style="margin-top:-10%; margin-bottom:-10%;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiKappaTheta2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-phiKappaTheta" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".phiSigModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-phiKappaTheta" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".phiSigmaKappaModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Phi Kappa Theta</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Phi Kappa Theta was originally formed as a Catholic fraternity with the merging of two different fraternities, Phi Kappa and Theta Kappa Phi on April 29th, 1959. Phi Kappa Theta has since opened membership to any form of religion, but the fraternity strongly encourages each member to find their own spiritual grounds and live up to Christian ethics and belief in brotherhood and love. The Georgia Tech Gamma Tau chapter was established in 1969. The brothers of Phi Kappa Theta are encouraged to focus on the fraternity’s five pillars: spiritual, fraternal, intellectual, social, and leadership. Each member strives to develop a relationship transcending mere friendship with each other; brotherhood. Georgia Tech is a challenging school, and scholastic achievement is a top priority for each brother of Phi Kappa Theta. Therefore, each brother is stressed to work their hardest in all of his academic endeavors and assist others in their efforts. Because man is inherently a social creature, the brothers of Phi Kappa Theta are expected to live up to all social expectations befitting an exceptional Georgia Tech student, including building strong friendships and active participation in philanthropic events. Phi Kappa Theta provides an immense alumni network and various educational opportunities to improve member leadership abilities. These five pillars provide the strong foundation that makes each brother of Phi Kappa Theta a great man and a great asset to society.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_kappa_theta.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Gamma Tau  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('pkt_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('pkt_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('pkt_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gt.phikaps/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtpkt" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/PKTGammaTau" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gtpkt.org/brothers/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Phi Sigma Kappa</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_sigma_kappa.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.phiSigmaKappaModal').modal('show');">
                </div>

                <!-- modal for Chi Psi's info. -->
                <div class="modal fade phiSigmaKappaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-phiSigmaKappa" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="margin-top:-10%; margin-bottom:-10%;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PhiSigmaKappa1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-phiSigmaKappa" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".phiKappaThetaModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-phiSigmaKappa" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".pikeModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Phi Sigma Kappa</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            The brothers of Phi Sigma Kappa are a diverse group of men, striving to meet the goals of our cardinal principles of brotherhood, scholarship, and character. At Phi Sigma Kappa we don’t like to identify with any particular group because we find it nearly impossible. Instead, with our chapter’s current members hailing from 13 different states, we focus on keeping a wide range of people. This allows us to gather insight from different backgrounds, cultures, and past experiences. It also brings in wide and varied interests, which is great in helping everybody break out of their shell and getting involved. Phi Sigma Kappa participates in many social events on campus throughout the year. Sorority mixers and socials help brothers and associates to meet new people in a fun environment. Other parties such as our Christmas Party and the “South of the Border” party attract students throughout the school year and allow Phi Sigs to take a small break from the rigorous academics of Georgia Tech. In addition to Phi Sig hosted events, brothers also participate in various activities that allow us to hang out with other Greek students. Pick-up volleyball games on weekends are a regular event, and organized intramurals let brothers meet other Greeks in a more competitive atmosphere. Besides on-campus events, Phi Sig hosts several annual events off campus. Mountain Weekend and Semi-Formal in fall are opportunities for brothers and associates to ask dates to join them for a weekend of fun and bonding. In the spring, we have our annual Formal, and all the brothers bring dates with them to spend the weekend at a location usually out of the state. Recent Formal locations have included New Orleans, Charleston, and Savannah. Phi Sigma Kappa currently has the most recently renovated house on campus, completed less than a year ago. The new house can house almost all of the brothers and has a full 15 meal per week meal plan cooked by our chef.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/phi_sigma_kappa.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Kappa Deuteron  <br>
                                            <strong>Chapter Nickname:</strong> Phi Sig     <br>
                                            <strong>President's Name:</strong> <?php the_field('phisig_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('phisig_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('phisig_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTPhiSig/?ref=br_rs" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtphisig" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/GTPhiSigmaKappa" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gtpsk.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->

            </div> <!-- closes col-lg-12 -->
        </div>



        <!-- start of second row -->
        <div class="row">
            <div class="col-lg-12">


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Pi Kappa Alpha</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/pi_kappa_alpha.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.pikeModal').modal('show');">
                </div>

                <!-- modal for Delta Chi's chapter info -->
                <div class="modal fade pikeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-pike" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PiKappaAlpha1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PiKappaAlpha2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-pike" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".phiSigmaKappaModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-pike" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".piKappModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Pi Kappa Alpha</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Are you interested in a college organization composed of well-rounded men who strive to become the best scholars, leaders, athletes, and gentlemen on campus? The brothers of Pi Kappa Alpha Fraternity, or “Pikes,” command a towering presence at Georgia Tech with a commitment to broaden the college experience, making it more enjoyable and rewarding. As scholars, Pikes strive to attain the highest amount of knowledge in and out of the classroom to further their development as men and their careers after graduation. As leaders on campus, Pikes are very active. Many Pikes play on the club hockey and volleyball teams, are active members of Air Force ROTC, and several also work at the Campus Recreation Center and as teaching assistants. Pikes also like to lead a great social life by having annual social events such as the Fireman’s Ball and Pike’s Peak which prove that no parties are quite like PIKE parties. In athletics, Pikes are recognized as the team to beat. They consistently win fraternity championships in many sports, and they are always near the top in the overall fraternity intramural championship. Finally as gentlemen, the brothers of Pi Kappa Alpha are always expected to treat everybody on campus with respect and carry on the great legacy that has been laid down before them. If you are interested in maximizing your college experience, RUSH PIKE!
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/pi_kappa_alpha.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Delta  <br>
                                            <strong>Chapter Nickname:</strong> Pike     <br>
                                            <strong>President's Name:</strong> <?php the_field('pike_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('pike_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('pike_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTPIKES/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gt_pike" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gt_pike" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://www.facebook.com/GTPIKES/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Pi Kappa Phi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/pi_kappa_phi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.piKappModal').modal('show');">
                </div>

                <!-- modal for Delta Sig's chapter info -->
                <div class="modal fade piKappModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-piKapp" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PiKappaPhi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PiKappaPhi2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-piKapp" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".pikeModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-piKapp" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".psiUModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Pi Kappa Phi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            "Transcendent. Loyal. Fun. Prominent. Compassionate. Involved. Respected. All of these words have different definitions, but at Georgia Tech they mean the same thing: Pi Kappa Phi. On December 10, 1904, three students united in Charleston, South Carolina to form a club that would propel them to the leadership of their university. This organization became Pi Kappa Phi and the trend continues today. By 1913, the Iota chapter of Pi Kappa Phi was founded on Georgia Tech's campus. Iota continues to break new ground, as last spring we welcomed the largest spring pledge class in the university's history. Whether it is in intramural athletics, academics, philanthropy, or sorority relations, our high number of members and the diversity of personalities make us a leader in every category. We are the only Greek organization in the country to operate our own philanthropy, Push America. Furthermore, we offer the services of an academic advisor. When you become an associate member of Pi Kappa Phi, you embark upon a journey of mutual respect; our house is your house and you are treated like a brother. When you finally graduate from GT you will join an elite group of alumni - one of whom who has a building at Georgia Tech named after him."
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/pi_kappa_phi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Iota  <br>
                                            <strong>Chapter Nickname:</strong> Pi Kapp     <br>
                                            <strong>President's Name:</strong> <?php the_field('pikapp_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('pikapp_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('pikapp_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gtpikappaphi/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtpikappaphi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gtpikappaphi" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://pikapp.net/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Psi Upsilon</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/psi_upsilon.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.psiUModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade psiUModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-psiU" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="width:100%; height:auto; margin-bottom:-5%;"src="<?php echo get_template_directory_uri(); ?>/img/Houses/PsiUpsilon1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" style="margin-bottom:-5%" src="<?php echo get_template_directory_uri(); ?>/img/Houses/PsiUpsilon2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-psiU" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".piKappModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-psiU" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".saeModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Psi Upsilon</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Psi Upsilon is a co-ed fraternity. We have females. They're still called brothers. Never a miscommunication. You can't explain that. It's true: Psi Upsilon is the only co-ed social fraternity on campus. It may seem a bit strange, but stop by and you'll soon discover that "normal" isn't a word used around here very often. Ever wondered who would win in a fight between Cthulhu and Beowulf? Ever made spreadsheets in order to better raise your Pokemans? Ever burst into song during Disney's Mulan? Ever try to replace your body parts with those of dinosaurs during a game of D&amp;D? Ever wanted to pet a badger? I think five examples are enough; let's move on. One of the most commonly uttered phrases by the brothers here is "I never thought I'd join a fraternity," and if you stick around it won't take long for you figure out why. Psi Upsilon can be summed up by our rush motto: Individual standards, not standard individuals. For example, some of our brothers wear dresses...and not just the female ones. Some of our brothers play Magic: The Gathering and some of our brothers heckle them while they do it. Some of our brothers love to dance and some of our brothers stand awkwardly in corners. Some of our brothers are hardcore metal heads; some are hipsters—but only in an ironic sort of way. In our spare time, some of us tinker around with our wireless network while others battle it out with Foosball. Some of us throw pennies from the rooftops, some make ice cream with liquid nitrogen, some color all over our walls, and some adore playing with fire. We all enjoy different things, but at the end of the day, we all live under the same roof. Long story short, we're a pretty diverse group of people. Rush Psi Upsilon! You too might be worthy of joining our fighting force of extraordinary magnitude.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/psi_upsilon.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Gamma Tau  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('psiupsilon_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('psiupsilon_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('psiupsilon_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/psiugt/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtpsiu" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/psiugt" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.psiugt.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Sigma Alpha Epsilon</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_alpha_epsilon.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.saeModal').modal('show');">
                </div>

                <!-- modal for Chi Psi's info. -->
                <div class="modal fade saeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-sae" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/SigmaAlphaEpsilon1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-sae" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".psiUModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-sae" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".sigmaChiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Sigma Alpha Epsilon</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Sigma Alpha Epsilon was founded on March 9, 1856 in the heart of the deep south at the University of Alabama. One of the oldest fraternities on Georgia Tech’s campus, the Georgia Phi Chapter of Sigma Alpha Epsilon continues to hold itself to the highest of standards. We believe that being truly successful in college, even after graduation, requires a balance between academics, leadership, athletics, and gentlemanly conduct. Our chapter prides itself on being strong in all four areas. We guide ourselves by two principles: one is The True Gentleman, our creed which states how a gentleman should conduct himself towards others. The other is the principle that once you are an SAE, you are an SAE for life. This is clearly shown by our huge alumni presence, involvement with the Atlanta Area Alumni Association, and ties to famous Georgia Phi alumni such as the golfer Bobby Jones and former mayor of Atlanta Ivan Allen, Jr. Many of our brothers make valuable business contacts among the several thousand alumni active in the area. In addition we continue to maintain one of the strongest social calendars and closest brotherhoods on campus. This is evidenced by yearly trips to destinations such as New Orleans and Disney World, and social events featuring artists such as Corey Smith and the Zac Brown Band among others.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_alpha_epsilon.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Phi  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('sae_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('sae_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('sae_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/pg/Georgia.Tech.SAE/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>

                                            <a target="_blank" href="https://www.facebook.com/pg/Georgia.Tech.SAE/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->

            </div> <!-- closes col-lg-12 -->
        </div>

        <!-- start of second row -->
        <div class="row">
            <div class="col-lg-12">


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Sigma Chi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_chi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.sigmaChiModal').modal('show');">
                </div>

                <!-- modal for Delta Chi's chapter info -->
                <div class="modal fade sigmaChiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-sigmaChi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/SigmaChi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/SigmaChi2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-sigmaChi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".saeModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-sigmaChi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".snuModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Sigma Chi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Sigma Chi brothers focus on academics, social involvement, and most importantly our brotherhood. Our members are involved in FASET, Campus Outreach, GT Student Foundation, GT Ambassadors, Inter-Fraternity Council, and other organizations. Our philanthropic and community service activities include fundraising for and building a Habitat for Humanity house, fundraising for the Children’s Miracle Network, and volunteering at the Atlanta Food Bank. Each year, we field intramural teams in a variety of sports. We are also fortunate to have very active alumni; they have raised over $1 million for a foundation that grants $50,000 annually in merit-based scholarships to brothers and pledges. We consistently have a full fall social calendar including sorority mixers, band parties, semi-formal, farm parties, lake trips, and a whitewater rafting trip. Spring events include our White Rose Formal, alumni golf tournament, and Derby Days – a weeklong philanthropic and social competition between sororities – to name a few. While all Sigma Chis enjoy their time at college, we maintain a strong brotherhood, challenging each other to maintain our fundamental purpose as stated by our founders, “To cultivate and maintain the high ideals of friendship, justice and learning.”
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_chi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Beta Psi  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('sigmachi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('sigmachi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('sigmachi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/Sigma-Chi-at-Georgia-Tech-207937495922493/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtsigmachi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gtsigmachi" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.georgiatechsigmachi.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Sigma Nu</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_nu.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.snuModal').modal('show');">
                </div>

                <!-- modal for Delta Sig's chapter info -->
                <div class="modal fade snuModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-snu" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="width:100%; height:auto; margin-top:-5%; margin-bottom:-5%;"src="<?php echo get_template_directory_uri(); ?>/img/Houses/SigmaNu1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-snu" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".sigmaChiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-snu" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".sigEpModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Sigma Nu</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            The Sigma Nu Fraternity has played a leading role on the Georgia Tech campus for over one hundred continuous years. We pride ourselves on the well-rounded college experience, winning school championships in athletics, holding leadership positions across campus organizations, throwing social events every week, and developing ourselves into future leaders in the business world. Sigma Nu’s unique focus is on leadership and honor. We do not have a "fine system,” and therefore our brothers are charged with upholding their own honor when participating in chapter activities and when respecting one another. Sigma Nu's have held IFC presidential, executive, and recruitment positions for nearly a decade, as well as top tier leadership in other organizations. In fact, every one of our members are involved in other organizations across campus. Sigma Nu Nationally started the LEAD program, which many Fortune 500 companies have adopted for their own leadership training purposes. Our house offers a home away from home, worry-free, carefree environment to relax in between classes and on the weekend. We seek the top candidates during recruitment, but also seek candidates who break the mold. We work hard and play harder. Most of our members didn't expect to join our chapter, or even go Greek, so we encourage everyone to stop by and see what we're all about.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_nu.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Gamma Alpha  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('sigmanu_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('sigmanu_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('sigmanu_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTSigmaNu/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/sigmanugt" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>

                                            <a target="_blank" href="gtsigmanu.com" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Sigma Phi Epsilon</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_phi_epsilon.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.sigEpModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade sigEpModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-sigEp" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" style="width:100%; height:auto;" src="<?php echo get_template_directory_uri(); ?>/img/Houses/SigmaPhiEpsilon1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>

                                    </div>

                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/SigmaPhiEpsilon2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-sigEp" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".snuModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-sigEp" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".tkeModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Sigma Phi Epsilon</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Sigma Phi Epsilon, the largest fraternity in the nation with over 15,000 active undergraduate members, is not the typical fraternity. We live our lives by the ideals of having a sound mind and a sound body through a system called the Balanced Man Program. In this program, SigEps are encouraged to develop themselves into better men through campus involvement, academic success, and physical activity. Our brothers are actively involved in all facets of campus leadership including Student Government Association, the Interfraternity Council, FASET, GT Ambassadors, and the Executive Round Table. Academically, our brothers consistently have one of the highest fraternity GPA’s on campus and are active in undergraduate research as well as internships/co-ops. In addition, we have an active social calendar each semester including band parties, several mixers and date-nights with sororities, and weekend trips. Our most popular events are our Fall Beach Weekend in Panama City and our Spring Golden Heart Formal, which has been held in great locations such as New Orleans, Charleston, and Ashville. Athletically, SigEp fields two teams in every intramural sport on campus and has recently won either fraternity or school championships in sand volleyball, whiffleball, dodgeball, wallyball, and racquetball. In addition, some of our brothers are Varsity Athletes or participate in club sports such as soccer, lacrosse, rugby, and cycling. Through the Balanced Man Program, our brothers make huge personal strides throughout their college career that eventually lead to them being better men in all aspects of life. To find out more information about our scholarship for incoming male freshmen, as well as any other information about Sigma Phi Epsilon, please visit our website at www.sigep.ga. For information about recruitment and our Rush schedule, please email our Vice President of Recruitment at boothvogel@gmail.com
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/sigma_phi_epsilon.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Alpha  <br>
                                            <strong>Chapter Nickname:</strong> Sig Ep     <br>
                                            <strong>President's Name:</strong> <?php the_field('sigep_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('sigep_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('sigep_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/GTSigEp/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtsigep" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gtsigep" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://sigepgt.com/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Tau Kappa Epsilon</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/tau_kappa_epsilon.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.tkeModal').modal('show');">
                </div>

                <!-- modal for Delta Chi's chapter info -->
                <div class="modal fade tkeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-tke" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/TauKappaEpsilon1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/TauKappaEpsilon2.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-tke" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".sigEpModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-tke" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".thetaChiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Tau Kappa Epsilon</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
                                            Tau Kappa Epsilon (TKE), the country’s largest social fraternity, has been synonymous with success at Georgia Tech for more than sixty years. And, as one of the largest fraternities on the Tech campus, the Beta Pi Chapter been recognized as a Top TKE chapter nationally eight out of the last ten years. United by our fraternal ideals of love, charity, and esteem we pride ourselves on the diversity and well-roundedness that exists within our brotherhood. We are a fraternity dedicated to excellence in all we pursue, be it scholarship, campus involvement, athletics, or most importantly personal development of our members. We encourage you to come and meet the brothers of TKE to see if our college home might be the right place for you! So, if you’re looking for a “home away from home” and a place to build meaningful, life-long friendships, all while getting an education at one of the top schools in the nation, be our guest and come check out our house and meet the Tekes who are “redefining” fraternity membership in a positive way at Georgia Tech.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/tau_kappa_epsilon.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Beta Pi  <br>
                                            <strong>Chapter Nickname:</strong> TKE     <br>
                                            <strong>President's Name:</strong> <?php the_field('tke_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('tke_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('tke_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/TKE-at-GA-Tech-204348109623022/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>

                                            <a target="_blank" href="https://twitter.com/BetaPiTKE" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gttke.com/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->
            </div> <!-- closes col-lg-12 -->
        </div>

        <!-- start of second row -->
        <div class="row">
            <div class="col-lg-12">

                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Theta Chi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/theta_chi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.thetaChiModal').modal('show');">
                </div>

                <!-- modal for Delta Sig's chapter info -->
                <div class="modal fade thetaChiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-thetaChi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/ThetaChi1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-thetaChi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".tkeModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-thetaChi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".thetaXiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Theta Chi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
Since its founding in 1856, Theta Chi Fraternity has grown to more than 219 chapters and colonies across North America and has initiated over 170,000 brothers. The Alpha Nu Chapter of Theta Chi Fraternity was founded at Georgia Tech in 1923. Since then, Theta Chi has been making men better in all areas of life, extending beyond the college years alone. Our 71 brothers strive to develop leadership through campus involvement and through the many different positions available within the house. Some of the many campus organizations that our brothers participate are FASET Orientation, Connect With Tech, the Interfraternity Council, the Ramblin’ Reck Club, GT Student Foundation, GT Tour Guides, as well as SGA. Brothers are also involved in religious organizations on campus as well as being members of numerous honor organizations. At Theta Chi, we believe in the Helping Hand and volunteer many hours to benefit the surrounding community as well as our very own Shirlock Foundation. We are great enthusiasts of athletics and sports by competing in Greek Week and Georgia Tech intramurals. In the last six out of seven years, we have been Greek Week Champions. Furthermore, some of our brothers are also involved in many of Georgia Tech's organizations including athletic clubs such as GT Rugby and GT Crew. Our house was built in 2003 and is able to comfortably house forty-four brothers. We are also one of only two houses on campus that enjoy a heated swimming pool. Throughout the year, Theta Chi hosts a large number of social events such as band parties, trips to away football games, summer lake trips, winter cabin weekends, as well as our spring Red Carnation formal. Amid all these different facets, Theta Chi is a place to grow and create a bond of brotherhood for life. We are ordinary men doing extraordinary things.                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/theta_chi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Alpha Nu  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('thetachi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('thetachi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('thetachi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/Theta-Chi-Fraternity-at-Georgia-Tech-273539922827537/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtthetachi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/gtthetachi" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://www.gtthetachi.org" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Theta Xi</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/theta_xi.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.thetaXiModal').modal('show');">
                </div>

                <!-- modal for Chi Phi's info. -->
                <div class="modal fade thetaXiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-thetaXi" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/Houses/ThetaXi1.JPG" alt="...">
                                        <div class="carousel-caption">
                                            <!-- <h2 style="text-shadow:black 0px 0px 10px;">Alpha Epsilon Pi</h2> -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-thetaXi" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".thetaChiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-thetaXi" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".triangleModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center">
                                    <div class="col-md-12">
                                        <h2>Theta Xi</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
The Beta Alpha Chapter of the Theta Xi Fraternity is a brotherhood of Christian men, united behind the ideals of leadership, service, and integrity. Theta Xi is a national fraternity that expects excellence in each of it chapters through leadership and service to their communities. Each chapter has its own unique quality that causes it to emanate excellence in every aspect. Ours is a desire to glorify Christ. We cultivate men of high physical, scholastic, social, and spiritual renown. Our chapter consistently attains academic excellence, with a total GPA significantly higher than that for all males at Georgia Tech. In years past Theta Xi won the prestigious Dean Dull award, an annual award given to the fraternity with the most leadership, philanthropy, campus involvement, and various other criteria. Receiving the Dean Dull award is yet another testament to Theta Xi's drive to succeed in every pursuit our brothers undertake. Our chapter takes great pride in our athleticism and involvement with brothers participating in intramurals, ROTC, Student Government, and numerous other leadership organizations. We are dedicated to service to both Georgia Tech as well as abroad, with brother leading mission trips to South Africa, Bosnia, Chile, China, and Brazil. Beyond that, Theta Xi has many opportunities to flourish socially with band parties, beach retreats, mixers, and our Blue Iris formal. Theta Xi is a brotherhood that prides itself on building men of morals who settle for nothing less than excellence in their faith, academics, and athletics. We encourage you to stop by during rush and meet some of the brothers.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/theta_xi.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Beta Alpha  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('thetaxi_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('thetaxi_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('thetaxi_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/gtthetaxi/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gtthetaxi" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/ThetaXi_GT" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="http://thetaxi.org" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Triangle</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/triangle.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.triangleModal').modal('show');">
                </div>

                <!-- modal for Chi Psi's info. -->
                <div class="modal fade triangleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-triangle" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/Triangle1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-triangle" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".thetaXiModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-triangle" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".zbtModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Triangle</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
All Triangle Fraternity brothers strive to be leaders in the campus, local community, and their chosen fields of study. In order to do so, our brothers and volunteers are aware of our mission. Triangle’s purpose is as follows: The purpose of Triangle shall be to maintain a fraternity of engineers, architects and scientists. It shall carry out its purpose by establishing chapters that develop balanced men who cultivate high moral character, foster lifelong friendships, and live their lives with integrity. For more information about Triangle Fraternity and how you can get involved with the establishment of its chapter here at Georgia Tech, please contact Brandon Montalvo: brandon@triangle.org | (408) 375-5728 | triangle.org                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/triangle.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Georgia Tech  <br>
                                            <!-- <strong>Chapter Nickname:</strong> AEPi     <br> -->
                                            <strong>President's Name:</strong> <?php the_field('triangle_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('triangle_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('triangle_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/TriangleGT/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>

                                            <a target="_blank" href="http://www.gttriangle.org/" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 ">
                    <h3 style="text-align:center;">Zeta Beta Tau</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/zeta_beta_tau.png" class="thumbnail img-responsive" style="margin:auto; margin-bottom:5px;" onclick="$('.zbtModal').modal('show');">
                </div>

                <!-- modal for Delta Chi's chapter info -->
                <div class="modal fade zbtModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
                    <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                        <div class="modal-content">
                            <div id="carousel-controls-zbt" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive"  src="<?php echo get_template_directory_uri(); ?>/img/Houses/ZetaBetaTau1.jpg" alt="...">
                                        <div class="carousel-caption">
                                            <!-- no carousel caption here yet... -->
                                        </div>
                                    </div>
                                    <!-- <div class="item">
                                        <img class="img-responsive" src="./img/carousel/st_baldricks.png" style="width:100%;">

                                    </div> -->
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-controls-zbt" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".triangleModal">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-controls-zbt" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".aepiModal">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <div class="chapter-information-outer">
                                <div class="col-md-12 text-center" style="margin-bottom:25px;">
                                    <div class="col-md-12">
                                        <h2>Zeta Beta Tau</h2>
                                        <br>
                                        <h6> </h6>
                                    </div>
                                    <div class="col-md-7" style="text-align:left; margin-bottom:10px;">
                                        <p>
Zeta Beta Tau was founded by Richard J. H. Gottheil of Columbia University in 1898 as a society of New York City area Jewish students. Since 1954, ZBT has been committed to its policy of non-sectarian brotherhood, and values the diversity of its brothers. ZBT will recruit and initiate men of good character, regardless of religion, race, or creed who are accepting of these principles. The Georgia Tech chapter of Zeta Beta Tau Fraternity, Xi Chapter, was founded in 1916. Since its inception, our fraternity, has grown to include 87 active chapters in the United States and Canada.
                                        </p>
                                    </div>
                                    <div class="col-md-5" style="position:relative;height:100%;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Chapter Crests/zeta_beta_tau.png" class=" img-responsive" style="margin:auto; margin-bottom:5px;">
                                        <p style="text-align:center;">
                                            <br>
                                            <strong>Chapter Designation:</strong> Xi  <br>
                                            <strong>Chapter Nickname:</strong> Zeta Beta Tau     <br>
                                            <strong>President's Name:</strong> <?php the_field('zbt_president_name'); ?> <br>
                                            <strong>Contact Number:</strong> <?php the_field('zbt_phone_number'); ?>‬ <br>
                                            <strong>Contact Email:</strong> <?php the_field('zbt_email'); ?>‬ <br>
                                        </p>

                                        <br>
                                        <!-- <div style="position:absolute; bottom:0px;"> -->
                                            <hr>
                                            <br>
                                            <a target="_blank" href="https://www.facebook.com/techzbt/" class="footer-social-media-icons" style="background-color:#4468b0!important; color:white!important;">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="https://www.instagram.com/gt_zbt" class="instagram footer-social-media-icons">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a target="_blank" href="https://twitter.com/ZBT_GT" class="footer-social-media-icons" style="background-color:#2aa3ef!important; color:white!important;">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="https://www.techzbt.com/index.html" class="footer-social-media-icons" style="background-color:#000!important; color:white!important;">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                        <!-- </div> -->

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" id="btnclose" data-dismiss="modal">X</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- last member of row -->
            </div> <!-- closes col-lg-12 -->
        </div>

        <!-- /.row -->
        <hr>

        <iframe src="https://www.google.com/maps/d/embed?mid=1om-9A_BTV-dUMQ99ORNcI5hYkZUUOW0A" width="100%" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>

        <hr>

        <br>
        <br>
        <br>
<?php get_footer(); ?>

    
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


<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3500, //changes the speed
        pause:'null',
        wrap:true
    });
    </script>




 <script>
$('.modal').on('shown.bs.modal', function (e) {
  // do something...
  document.body.className += ' ' + 'modal-open';
  // equalHeight($(".col"));
});
$('.modal').on('hidden.bs.modal', function (e) {
    document.body.className = document.body.className.replace("modal-open","");
});
// </script>


</body>

</html>
