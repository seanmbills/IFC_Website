<?php get_header(); ?>

<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carousel/Wreck Photo Exec.png'); background-position:center bottom;"></div>
                <div class="carousel-caption">
                    <h1 style="text-shadow:black 0px 0px 10px;">Georgia Tech IFC</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carousel/Sigma Chi Puppy.png'); background-position:center center;"></div>
                <div class="carousel-caption">
                    <h2 style="text-shadow:black 0px 0px 10px;"></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carousel/Chi Phi.png'); background-position: center top;"></div>
                <div class="carousel-caption">
                    <h2 style="text-shadow:black 0px 0px 10px;"></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/carousel/SigEp Flag.png');"></div>
                <div class="carousel-caption">
                    <h2 style="text-shadow:black 0px 0px 10px;"></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container" z-index:2000>
        <hr>

        <div class="row">
            <div class="col-md-4 col-sm-4 what-we-do">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <h3>WHAT WE DO</h3>
                        <br>
                        <p>The Interfraternity Council (IFC) at Georgia Tech leads and directs the 32 member fraternities on campus. Each of the thirty-two chapters represented are members of the North-American Interfraternity Conference (NIC), an national governing body. The Interfraternity Council promotes the interests of fraternities in general, and insures cooperation among the different fraternities on campus.
                        <br>
                        <br>
                        <br>
                        <b>Mission Statement:</b>
                        <br>
                        The mission of the Interfraternity Council is to develop ideal members of society who lead with integrity, encourage outstanding academic performance, support the development of our member chapters, promote the traditions and growth of the Greek community, and set a standard of excellence for all students at the Georgia Institute of Technology. Click here to learn more about IFC's role on campus and for some important IFC resources!</p>
                        <br>
                        <a href="faq.html" class="btn btn-primary">Learn More!</a>
                        <br>

                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 meet-our-exec">
                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <h3>MEET OUR EXEC</h3>
                        <br>
                            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/gt_ifc_example.png" style="height:auto; width:auto; margin:auto; display:block;">
                        <br>
                        <a href="exec_board.html" class="btn btn-primary">Learn More!</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <hr>
        <br>

        <div class="row">
            <div class="col-md-7 panel panel-default" style="height:1010px;">
                <h2 class="page-header" style="color:#FF2400">Latest News</h2>
                <div id="blog" style="height:884px; margin-bottom:20px; overflow-y:scroll!important;">
                </div>
            </div>
            <div class="col-md-5" style='height:1010px;'>
                <div class="col-md-6" style="width:100%; height:100%; overflow-y:none; margin-bottom:10px; text-align:center;">
                    <iframe id="facebook-div-holder" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgtifc%2F&tabs=timeline&width=340&height=1010&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="1010" style="border:none;overflow:hidden;resize:horizontal;" scrolling="no" frameborder="0" width="340" allowTransparency="true"></iframe>
                </div>
            </div> <!-- col-md-6 above that contains both of these divs -->
        </div>
        <!-- /.row -->

<?php get_footer(); ?>

    <script>
    $('.carousel').carousel({
        interval: 7000, //changes the speed to take 7000 miliseconds to rotate images
        pause:'null', // sets it to not stop in between images
        wrap:true // sets it to go around and around instead of stopping after one cycle
    });
    </script>

    <!-- script to control getting all of the relevant information from the WordPress site
         on which the "blog" is stored
         NOTE: look into moving this back in to its own JS file...in fact look into moving
         all of this to a separate file -->
    <script>
    // $(window).on("load", async function() {
 //        // lists to keep track of various information from blog posts
    //  var titles = [];
    //  var contents = [];
    //  var dates = [];

 //        // this is the most important part of the function as it gets the actual content from the WordPress site
 //        // the "await" is absolutely necessary or else you'll end up jumping over this code before the HTTP
 //        // request being made here finishes and you'll end up with an empty list of posts
 //        // NOTE: await tells the JavaScript in runtime to wait for this entire method to finish
    //  await jQuery.get( "http://public-api.wordpress.com/rest/v1/sites/seanmbills213.wordpress.com/posts/?http_envelope=true&amp;number=10", function( response ) {
    //      // response contains site information
    //      var body = response['body'];
    //      var found = parseInt(body['found']);
    //      posts = body['posts'];

 //            // iterate over all posts returned and add their title, contents, and dates created to the
 //            // respective lists above
    //      var i;
    //      for (i = 0; i < found; i++) {
    //          post = posts[i];
    //          //console.log(post);
    //          titles.push(post['title']);
    //          contents.push(post['content']);
    //          var date = new Date(post['date']);
    //          var newDate = date.toString('dd-MM-yy');
    //          dates.push(newDate);
    //      }
    //  });
 //        // set up the content for the blog div itself here
 //        // NOTE: need to come back and make each post into its own div with a popup functionality possible?
    //  var blogContent = "";
    //  for (var i = 0; i < titles.length; i++) {
    //      blogContent += "<p><strong>" + titles[i] + "</strong><br>";
    //      blogContent += contents[i];
    //      blogContent += "<br>Posted On: " + dates[i] + "<br><hr><br>";
    //  }
 //        // update the contents of the blog div on the home page
    //  $("#blog").html(blogContent);
    // });
        console.log("made it here...");
        $(window).on("load", getWordPress());

        async function getWordPress() {
            console.log("made it here (2)...");
            var titles=[];
            var contents = [];
            var dates = [];

            await $.ajax({
                type:'GET',
                dataType:"jsonp",
                url:"http://public-api.wordpress.com/rest/v1.1/sites/ifcgatech.wordpress.com/posts/?http_envelope=true&amp;number=10",

                success: function(result) {
                    console.log(result);
                    var body = result['body'];
                    var found = parseInt(body['found']);
                    posts = body['posts'];
                    console.log(posts);
                    var i;
                     for (i = 0; i < found; i++) {
                        post = posts[i];
                        //console.log(post);
                        titles.push(post['title']);
                        contents.push(post['content']);
                        var date = new Date(post['date']);
                        var newDate = date.toString('dd-MM-yy');
                        dates.push(newDate);
                    }

                }
            });
            var blogContent = "";
            for (var i = 0; i < titles.length; i++) {
                blogContent += "<p><strong>" + titles[i] + "</strong><br>";
                blogContent += contents[i];
                blogContent += "<br>Posted On: " + dates[i] + "<br><hr><br>";
            }
        // update the contents of the blog div on the home page
            $("#blog").html(blogContent);
        }

    </script>


    <!-- script to control changing the colors of the navigation bar and whatnot at the
         top of the screen when the user scrolls past a certain point -->
    <script>
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 5) {
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



    <script>
        var completedInitialCalculation;
        function getFacebookYLocation() {
            if (!completedInitialCalculation) {
                var element = document.getElementById('facebook-div-holder');
                var position = element.getBoundingClientRect();
                var x = position.left;
                var y = position.top;
                console.log(y);
                completedInitialCalculation = true;
            }
        }

        // $(window).on("scroll", function() {
        //     console.log($(window).scroll());
        // });
    </script>

<script>


    function equalHeight(group) {
    var tallest = 0;
    group.each(function() {
        var thisHeight = $(this).height();
        if(thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.each(function() { $(this).height(tallest); });
}

$(document).ready(function() {
    equalHeight($(".panel-body"));
    checkResize();
});

</script>


<script>
    window.addEventListener("resize", checkResize);

    function checkResize() {
        var winWidth = window.innerWidth;
        var winHeight = window.innerHeight;
        //console.log(winWidth);
        if (winWidth >= 1220) {
            $(".what-we-do").removeClass("col-md-4");
            $(".what-we-do").removeClass("col-sm-4");
            $(".what-we-do").removeClass("col-md-5");
            $(".what-we-do").removeClass("col-sm-5");
            $(".what-we-do").removeClass("col-md-6");
            $(".what-we-do").removeClass("col-sm-6");
            $(".what-we-do").removeClass("col-md-12");
            $(".what-we-do").removeClass("col-sm-12");
            $(".what-we-do").addClass("col-md-4");
            $(".what-we-do").addClass("col-sm-4");
            $(".meet-our-exec").removeClass("col-md-12");
            $(".meet-our-exec").removeClass("col-sm-12");
            $(".meet-our-exec").removeClass("col-md-8");
            $(".meet-our-exec").removeClass("col-sm-8");
            $(".meet-our-exec").removeClass("col-md-7");
            $(".meet-our-exec").removeClass("col-sm-7");
            $(".meet-our-exec").removeClass("col-md-6");
            $(".meet-our-exec").removeClass("col-sm-6");
            $(".meet-our-exec").addClass("col-md-8");
            $(".meet-our-exec").addClass("col-sm-8");
        } else if (winWidth < 1220 && winWidth >= 992) {
            $(".what-we-do").removeClass("col-md-4");
            $(".what-we-do").removeClass("col-sm-4");
            $(".what-we-do").removeClass("col-md-5");
            $(".what-we-do").removeClass("col-sm-5");
            $(".what-we-do").removeClass("col-md-6");
            $(".what-we-do").removeClass("col-sm-6");
            $(".what-we-do").removeClass("col-md-12");
            $(".what-we-do").removeClass("col-sm-12");
            $(".what-we-do").addClass("col-md-5");
            $(".what-we-do").addClass("col-sm-5");
            $(".meet-our-exec").removeClass("col-md-12");
            $(".meet-our-exec").removeClass("col-sm-12");
            $(".meet-our-exec").removeClass("col-md-8");
            $(".meet-our-exec").removeClass("col-sm-8");
            $(".meet-our-exec").removeClass("col-md-7");
            $(".meet-our-exec").removeClass("col-sm-7");
            $(".meet-our-exec").removeClass("col-md-6");
            $(".meet-our-exec").removeClass("col-sm-6");
            $(".meet-our-exec").addClass("col-md-7");
            $(".meet-our-exec").addClass("col-sm-7");
        } else if (winWidth < 992) {
            $(".what-we-do").removeClass("col-md-4");
            $(".what-we-do").removeClass("col-sm-4");
            $(".what-we-do").removeClass("col-md-5");
            $(".what-we-do").removeClass("col-sm-5");
            $(".what-we-do").removeClass("col-md-6");
            $(".what-we-do").removeClass("col-sm-6");
            $(".what-we-do").removeClass("col-md-12");
            $(".what-we-do").removeClass("col-sm-12");
            $(".what-we-do").addClass("col-md-12");
            $(".what-we-do").addClass("col-sm-12");
            $(".meet-our-exec").removeClass("col-md-12");
            $(".meet-our-exec").removeClass("col-sm-12");
            $(".meet-our-exec").removeClass("col-md-8");
            $(".meet-our-exec").removeClass("col-sm-8");
            $(".meet-our-exec").removeClass("col-md-7");
            $(".meet-our-exec").removeClass("col-sm-7");
            $(".meet-our-exec").removeClass("col-md-6");
            $(".meet-our-exec").removeClass("col-sm-6");
            $(".meet-our-exec").addClass("col-md-12");
            $(".meet-our-exec").addClass("col-sm-12");
        }
        // var elements = document.getElementsByClassName(".panel-body");
        // for (var i = 0; i < elements.length; i++) {
        //     elements[i].css("height=0px!important;";
        //     elements[i].css("height=auto!important;";
        // }
        // equalHeight($(".panel-body"));
        getHeights($(".panel-body"), winWidth);
    }

    function getHeights(group, windowWidth) {
        if (windowWidth >= 992) {
            var tallest = 0;
            group.each(function() {
                var totalHeight = 0;
                //console.log($(this));
                $(this).children().each(function(){
                    //console.log($(this));
                    totalHeight = totalHeight + $(this).outerHeight(true);
                });
                //console.log(totalHeight);
                if(totalHeight > tallest) {
                    tallest = totalHeight;
                }
            });
            group.each(function() { $(this).height(tallest); });
        } else {
            group.each(function() {
                var totalHeight = 0;
                //console.log($(this));
                $(this).children().each(function(){
                    //console.log($(this));
                    totalHeight = totalHeight + $(this).outerHeight(true);
                });
                //console.log(totalHeight);
                $(this).height(totalHeight);
            });
        }

    }
</script>


</body>

</html>
