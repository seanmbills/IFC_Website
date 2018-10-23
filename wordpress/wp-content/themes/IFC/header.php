<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The official homepage of the Georgia Institute of Technology Interfraternity Council">
    <meta name="Georgia Tech Interfraternity Council" content="Fraternity Websites, Sorority Websites, ChapterSpot.com, IFC, Interfraternity Council, GT IFC, Georgia Tech IFC, Georgia Tech Interfraternity Council, Georgia Tech Fraternities, georgia tech, georgia tech interfraternity council, gt ifc, gt fraternity council">

    <?php wp_head(); ?>

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background-color: rgba(25,25,25,0.3);">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="background-image:url('./img/IFC Logo reverse.png');width:125px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php 
                        $nav = wp_get_nav_menu_items( 'primary-menu' );
                        foreach( $nav as $nav_item ) {
                            echo '<li class="nav-item"><a href="' . $nav_item->url . '" role="presentation" class="nav-link">' . $nav_item->title . '</a></li>';
                        }
                    ?>
                    <!-- <li class="dropdown">
                        <a href="index.html">HOME</a>
                    </li>
                    <li class="dropdown">
                        <a href="chapters.html">CHAPTERS</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">RECRUITMENT<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="chapter-scholarships.html">Student Scholarships</a>
                            </li>
                            <li>
                                <a href="parents-information.html">Information for Parents and Guide to Greek Life</a>
                            </li>
                            <li>
                                <a href="rush-calendar.html">Recruitment Events Calendar</a>
                            </li>
							<li>
                                <a href="https://orgsync.com/136187/forms/322105">Register for Fall 2018 Recruitment</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="https://gt.crowdchange.co/" target="_blank">PHILANTHROPY</a>
                    </li>
                    <li class="dropdown">
                        <a href="exec_board.html">EXEC BOARD</a>
                    </li>
                    <li class="dropdown">
                        <a href="chairmen.html">COMMITTEE CHAIRMEN</a>
                    </li>
                    <li class="dropdown">
                        <a href="blog.html">BLOG</a>
                    </li>
                    <li class="dropdown">
                        <a href="resources.html">RESOURCES</a>
                    </li>
                    <li class="dropdown">
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li class="dropdown">
                        <a href="https://www.facebook.com/gtifc/" style="background-color:#4468b0!important; color:white!important;">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="https://www.instagram.com/gt_ifc/" class="instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="https://twitter.com/GT_IFC" style="background-color:#2aa3ef!important; color:white!important;">
                            <i style="font-size:1em;" class="fa fa-twitter"></i>
                        </a>
                    </li> -->
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>