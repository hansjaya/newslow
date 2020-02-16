<?php 
/*
| -------------------------------------------------------------------------------
| Author            : Mathin Mochammad
| Template Name     : Muvimag V2
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head itemscope itemtype="http://schema.org/WebSite">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title itemprop="name"><?php oc_title();?></title>
        <meta name="description" content="<?php oc_description();?>">
        <meta name="keywords" content="<?php echo config('sitekeywords');?>" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="author" content="admin">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php oc_title() ?>" />
        <meta property="og:description" content="<?php oc_description();?>">
        <meta property="og:type" content="website" />
        <meta property="og:author" content="Admin">
        <meta property="og:site_name" content="<?php echo config('sitename') ?>">
        <meta property="og:url" content="<?php echo site_uri() ?>" />
        <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>" />
        <?php else: ?>
        <?php endif ?>
        <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/style.min.css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/'.config('favicon')?>">
        <link href="<?php style_theme() ?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php style_theme() ?>/css/owl.theme.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
        <?php oc_head(); ?>
        <style type="text/css">
            .logo {
                font-size: 20px;
                margin-top: 15px;
                color: #ffffff;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <header class="style2">
                <div class="topstrip" style="height: 5px; background-color: #1A1A1A;">
                    
                </div>
                <div class="logobar">
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="logo"> <i class="glyphicon glyphicon-facetime-video"></i> <?php echo config('sitelogo'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="searchbox">
                                    <form action="/" method="get">
                                        <ul>
                                            <li>
                                                <input type="text" name="s" placeholder="Search for...">
                                            </li>
                                            <li class="pull-right">
                                                <input type="submit" value="Search">
                                            </li>
                                        </ul>
                                    </form>
                                </div>

                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <div id="google_translate_element" style="margin-top: 20px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigationstrip bordercolor-top">
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-lg-10 col-md-9 col-sm-6 col-xs-4">
                                <div class="navigation">
                                    <div class="navbar yamm navbar-default">
                                        <div class="row">
                                            <div class="navbar-header">
                                                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle" aria-expanded="false"> <i class="fa fa-bars"></i> Menu </button>
                                            </div>
                                            <div id="navbar-collapse-1" class="navbar-collapse collapse ddsmoothmenu">
                                                <ul class="nav navbar-nav">
                                                    <li><a href="<?php echo site_url() ?>"><i class="fa fa-home"></i> Home</a></li>
                                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-video-camera"></i> Movies <span class="caret"></span></a>
                                                        <ul class="dropdown-menu animated fadeIn" role="menu">
                                                            <li><a href="<?php echo view_page( 'movies-nowplay' );?>"><i class="fa fa-play-circle-o"></i> Now Playing</a></li>
                                                            <li><a href="<?php echo view_page( 'upcoming-movies' );?>"><i class="fa fa-random"></i> Upcoming</a></li>
                                                            <li><a href="<?php echo view_page( 'toprated-movies' );?>"><i class="fa fa-line-chart"></i> Top Rated</a></li>
                                                            <li><a href="<?php echo view_page( 'popular-movies' );?>"><i class="fa fa-trophy"></i> Popular</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-play-circle"></i> TV Series <span class="caret"></span></a>
                                                        <ul class="dropdown-menu  animated fadeIn" role="menu">
                                                            <li><a href="<?php echo view_page( 'tv-airing' );?>"><i class="fa fa-random"></i> Airing TV Shows</a></li>
                                                            <li><a href="<?php echo view_page( 'tv-ontheair' );?>"><i class="fa fa-line-chart"></i> On the Air TV Shows</a></li>
                                                            <li><a href="<?php echo view_page( 'tv-popular' );?>"><i class="fa fa-star"></i> Popular TV Series</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open"></i> Watch By Genres <span class="caret"></span></a>
                                                        <ul class="dropdown-menu animated fadeIn" role="menu">
                                                            <?php foreach ($_cate as $cateid => $catename): ?>
                                                            <li><a href="<?php echo seocat( $catename,$cateid );?>"><?php echo ucwords($catename) ?></a></li>
                                                            <?php endforeach ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
		                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-8">
		                        <div class="loginsec pull-right" style="a{color: black;}">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#reg_form"><i class="fa fa-sign-in"></i>Login / Register</a>
                                </div>
		                    </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="contents">
                <div class="custom-container">
                    <div class="row">