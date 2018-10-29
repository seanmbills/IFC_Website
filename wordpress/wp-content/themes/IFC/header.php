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
                <a class="navbar-brand" href="index.html" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/IFC Logo reverse.png');width:125px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        $nav = wp_get_nav_menu_items( 'primary-menu' );
                        $count = 0;
                        $submenu = false;
                        foreach( $nav as $item ):
                            $link = $item->url;
                            $title = $item->title;
                            // item does not have a parent so menu_item_parent equals 0 (false)
                            if ( !$item->menu_item_parent ):
                                // save this id for later comparison with sub-menu items
                                $parent_id = $item->ID;
                    ?>

                        <li class="dropdown">
                            <?php if ($parent_id == $item->menu_item_parent): ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $title; ?><b class="caret"></b></a>
                            <?php else :?>
                            <a href="<?php echo $link; ?>">
                                <?php echo $title; ?>
                            </a>
                        <?php endif; endif; ?>

                            <?php if ( $parent_id == $item->menu_item_parent ): ?>

                                <?php if ( !$submenu ): $submenu = true; ?>
                                <ul class="dropdown-menu">
                                <?php endif; ?>

                                    <li>
                                        <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
                                    </li>

                                <?php if ( $nav[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                                </ul>
                                <?php $submenu = false; endif; ?>

                            <?php endif; ?>

                        <?php if ($count + 1 > count($nav)):
                                if ($nav[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                                    </li>                           
                        <?php $submenu = false; endif; endif; ?>

                    <?php $count++; endforeach; ?>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
