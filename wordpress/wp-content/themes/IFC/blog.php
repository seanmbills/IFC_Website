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
                
        <?php $count++; ?>
        <?php endwhile; endif; ?>

        


        <br>
        <br>

        <?php get_footer(); ?>
    
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
