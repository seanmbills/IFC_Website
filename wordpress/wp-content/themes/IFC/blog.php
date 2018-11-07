<?php /* Template Name: blog */ ?>

<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container" z-index:2000 style="margin-top:50px;">
        
        <div class="row">
            <div class="col-lg-12" style="text-align:center;">
                <h1>IFC Blog</h1>
            </div>
        </div>

        <hr>


        <div class="row">
            <div class="col-lg-12">
                <div id="blog">
                    <?php 
                        $args = array(
                            'posts_per_page'   => -1,
                            'post_type'        => 'post',
                        );
                        $the_query = new WP_Query( $args );
                    ?>

                    <?php if($the_query->have_posts()):
                            $count = 0;
                            while($the_query->have_posts() && $count < 10):
                                $the_query->the_post();
                                
                    ?>
                    <div class="post<?php echo $count; ?>">
                        <p>
                            <strong>
                                <?php 
                                    the_title();
                                ?>
                            </strong>
                            <br>
                            <?php the_excerpt(); ?>
                            <a data-toggle="modal" data-target=".post<?php echo $count; ?>Modal">Show more...</a><br>
                            <br>
                            Posted On: <?php echo get_the_date(); ?>
                            <br>
                            <hr>
                            
                        </p>
                    </div>
                <?php $count++; ?>
                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>

        <?php 
            $args = array(
                'posts_per_page'   => -1,
                'post_type'        => 'post',
            );
            $the_query = new WP_Query( $args );
        ?>

        <?php
            if($the_query->have_posts()):
                $count = 0;
                while($the_query->have_posts() && $count < 10):
                    $the_query->the_post();
        ?>

        <div class="modal fade post<?php echo $count; ?>Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"><!--This class matches the button target-->
            <div class="modal-dialog modal-lg"><!--This will also affect your modal size, look into it-->
                <div class="modal-content">
                    <div id="carousel-controls-post<?php echo $count; ?>" class="carousel slide" data-ride="carousel"><!--This calls the controls for the carousel, note the id-->
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-lg-12">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8 post<?php echo $count; ?>Contents" style="height:auto!important;">
                                        <br>
                                        <h3><strong><?php the_title(); ?></strong></h3>
                                        <hr>
                                        <p>
                                            <?php the_content(); ?>
                                            <br>
                                            Posted On: <?php echo get_the_date(); ?>
                                            <br>
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-controls-post<?php echo $count; ?>" role="button" data-slide="prev" data-dismiss="modal" data-toggle="modal" data-target=".post9Modal" style="background-image: none!important;">
                            <span class="glyphicon glyphicon-chevron-left" style="color:black!important;"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-controls-post<?php echo $count; ?>" role="button" data-slide="next" data-dismiss="modal" data-toggle="modal" data-target=".post<?php echo (($count + 1) % 10); ?>Modal" style="background-image: none!important;">
                            <span class="glyphicon glyphicon-chevron-right" style="color:black!important;"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                <!-- // // print out the outer modal container
                // echo "<div class='modal fade post" . $count . "Modal' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>";
                // // print the inner modal dialog container
                // echo "<div class='modal-dialog modal-lg'>";
                // // echo "<"

                // //close inner modal dialog
                // echo "</div>";
                // // close outer modal container
                // echo "</div>"; -->
        <?php $count++; ?>
        <?php endwhile; endif; ?>

        


        <br>
        <br>

        <?php get_footer(); ?>
    

    <!-- script to control getting all of the relevant information from the WordPress site
         on which the "blog" is stored 
         NOTE: look into moving this back in to its own JS file...in fact look into moving
         all of this to a separate file -->
    <script>
    
        // console.log("made it here...");
        // $(window).on("load", getWordPress());

        // async function getWordPress() {
        //     var titles = [];
        // var contents = [];
        // var dates = [];
        // var excerpts = [];

        //     await $.ajax({
        //         type:'GET',
        //         dataType:"jsonp",
        //         url:"http://public-api.wordpress.com/rest/v1.1/sites/ifcgatech.wordpress.com/posts/?http_envelope=true&amp;number=10",

        //         success: function(result) {
        //             console.log(result);
        //             var body = result['body'];
        //             var found = parseInt(body['found']);
        //             posts = body['posts'];
        //             console.log(posts);
        //             console.log(posts);
        //             var i;
        //             for (i = 0; i < found; i++) {
        //                 post = posts[i];
        //                 //console.log(post);
        //                 titles.push(post['title']);
        //                 contents.push(post['content']);
        //                 excerpts.push(post['excerpt']);
        //                 var date = new Date(post['date']);
        //                 var newDate = date.toString('dd-MM-yy');
        //                 dates.push(newDate);
        //             }

        //         }
        //     });
        //     var blogContent = "";
        //     for (var i = 0; i < titles.length; i++) {
        //         blogContent += '<div class="post' + i + '">';
        //         blogContent += "<h3><strong>" + titles[i] + "</strong></h3><br><h5>";
        //         blogContent += excerpts[i];
        //         blogContent += "<a onclick=" + "$('.post" + i + "Modal').modal('show');" + ">Show more...</a><br>";
        //         blogContent += "<br>Posted On: " + dates[i] + "<br><hr><br>";
        //         blogContent == '</h5>';
        //         blogContent += "</div>";
        //         $(".post" + i + "Contents").html("<br><h3 style='text-align:center;'>" + titles[i] + "</h3><hr><h5>" + contents[i] + "<br><br>"
        //             + dates[i] + "</h5>");
        //     }
        //     // update the contents of the blog div on the home page
        //     $("#blog").html(blogContent);
        // }


    // $(window).on("load", async function() {
    //     // lists to keep track of various information from blog posts
    //     var titles = [];
    //     var contents = [];
    //     var dates = [];
    //     var excerpts = [];

    //     // this is the most important part of the function as it gets the actual content from the WordPress site
    //     // the "await" is absolutely necessary or else you'll end up jumping over this code before the HTTP
    //     // request being made here finishes and you'll end up with an empty list of posts
    //     // NOTE: await tells the JavaScript in runtime to wait for this entire method to finish
    //     await jQuery.get( "http://public-api.wordpress.com/rest/v1.1/sites/seanmbills213.wordpress.com/posts/?http_envelope=true&amp;number=10", function( response ) { 
    //         // response contains site information
    //         var body = response['body'];
    //         var found = parseInt(body['found']);
    //         posts = body['posts'];
    //         console.log(posts);

    //         // iterate over all posts returned and add their title, contents, and dates created to the
    //         // respective lists above
    //         var i;
    //         for (i = 0; i < found; i++) {
    //             post = posts[i];
    //             //console.log(post);
    //             titles.push(post['title']);
    //             contents.push(post['content']);
    //             excerpts.push(post['excerpt']);
    //             var date = new Date(post['date']);
    //             var newDate = date.toString('dd-MM-yy');
    //             dates.push(newDate);
    //         }
    //     });
    //     // set up the content for the blog div itself here
    //     // NOTE: need to come back and make each post into its own div with a popup functionality possible?
    //     var blogContent = "";
    //     for (var i = 0; i < titles.length; i++) {
    //         blogContent += '<div class="post' + i + '">';
    //         blogContent += "<h3><strong>" + titles[i] + "</strong></h3><br><h5>";
    //         blogContent += excerpts[i];
    //         blogContent += "<a onclick=" + "$('.post" + i + "Modal').modal('show');" + ">Show more...</a><br>";
    //         blogContent += "<br>Posted On: " + dates[i] + "<br><hr><br>";
    //         blogContent == '</h5>';
    //         blogContent += "</div>";
    //         $(".post" + i + "Contents").html("<br><h3 style='text-align:center;'>" + titles[i] + "</h3><hr><h5>" + contents[i] + "<br><br>"
    //             + dates[i] + "</h5>");
    //     }
    //     // update the contents of the blog div on the home page
    //     $("#blog").html(blogContent);
    // });
    
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

    <script>
            $(".navbar-header").addClass("scrolled-header");
            $(".navbar-inverse").addClass("scrolled");
            $(".navbar-nav>li>a").addClass("scrolled-dropdown");
            $(".navbar-brand").addClass("scrolled-brand");
            
    </script>

</body>

</html>
