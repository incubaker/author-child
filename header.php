<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    
    <title>
        <?php
            global $page, $paged;
    
            wp_title( '|', true, 'right' );
    
            bloginfo( 'name' );
    
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    
            if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
        ?>
    </title>
    
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- OLD bookmark icon 
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    -->
    <!-- bookmark icon -->
    <link rel="shortcut icon" href="/wp-content/themes/author-child/images/favicon.png" />
    
    <!-- main stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    
    <!-- media queries -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/media-queries.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
    
    <!-- old google font 
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css' />
    -->
    <!-- new google font -->
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <!-- load scripts -->
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

    <!-- conditional css -->
    <style type="text/css">
        a {
            color:<?php echo of_get_option('of_colorpicker', 'no entry' ); ?>;
        }
        .scroll .flex-control-nav li a.active {
            background:<?php echo of_get_option('of_colorpicker', 'no entry' ); ?>;
        }
        
        <?php if ( of_get_option('of_theme_css') ) { ?>
            <?php echo of_get_option('of_theme_css'); ?>
        <?php } ?>
    </style>

    <script src="/wp-content/themes/author-child/jquery.backtotop.min.js"></script>
    <script src="/wp-content/themes/author-child/script.js"></script>

    <script> var jQuery = jQuery.noConflict(); </script>
    <script> var stayQuery = jQuery.noConflict(); </script>
    <script> var $ = jQuery.noConflict(); </script>
    <script type="text/javascript" src="/wp-content/themes/author-child//fancybox/lib/jquery-1.9.0.min.js"></script>
    <script> var jReggi = jQuery.noConflict(); </script>
    <link rel="stylesheet" href="/wp-content/themes/author-child//fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
    <script type="text/javascript" src="/wp-content/themes/author-child//fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>
    <script type="text/javascript" src="/wp-content/themes/author-child//jquery.cookie.js"></script>
    <script src="/wp-content/themes/author-child/squeeze.js"></script>

    <script> var jQuery = stayQuery; </script>

</head>

<body <?php body_class(); ?>>

    <style>

        .fancybox-inner {
            position: static;
        }

        #fancybox-content * {
            /*background: white;*/
        }

        .fancybox-skin {
            background-color: white; /* or whatever */
        }


        #fancybox-outer { 
            position: relative; 
            background: #fff; 
            -moz-border-radius:10px 10px 10px 10px; 
            border-radius:10px 10px 10px 10px; 
            -webkit-border-radius: 10px 10px 10px 10px; 
        } 

        #fancybox-content { 
            width: 0; 
            height: 0; 
            padding: 0; 
            outline: none; 
            position: relative; 
            overflow: hidden; 
            z-index: 1102; 
            border: 0px solid #fff; 
            -moz-border-radius:10px 10px 10px 10px; 
            border-radius:10px 10px 10px 10px; 
            -webkit-border-radius: 10px 10px 10px 10px; 
        } 

        #close-model{
            position: absolute;
            top: -15px;
            right: -25px;
        }

    </style>

    <div class="use-this" style="display:none;">
        <a id="close-model" href="#close-modal">&times;</a>
        <center>
            <img src="/wp-content/themes/author-child/images/logo_inverted.png" style="width:80px">
            <br><br>
            <p>Refreshing stories to start your week delivered right to your inbox</p>
            <br>
            <div class="widget_wysija_cont"><div id="msg-form-wysija-nl-php-2" class="wysija-msg ajax"></div><form id="form-wysija-nl-php-2" method="post" action="#wysija" class="widget_wysija form-valid-sub"><p><input type="text" id="form-wysija-nl-php-2-wysija-to" class="wysija-email validate[required,custom[email]]" name="wysija[user][email]" /><span class="wysija-p-firstname abs-req"><label for="form-wysija-nl-php-2-abs-firstname">First name</label><input type="text" id="form-wysija-nl-php-2-abs-firstname" class="validated[abs][req]" name="wysija[user][abs][firstname]" /></span><span class="wysija-p-lastname abs-req"><label for="form-wysija-nl-php-2-abs-lastname">Last name</label><input type="text" id="form-wysija-nl-php-2-abs-lastname" class="validated[abs][req]" name="wysija[user][abs][lastname]" /></span><span class="wysija-p-email abs-req"><label for="form-wysija-nl-php-2-abs-email">Email</label><input type="text" id="form-wysija-nl-php-2-abs-email" class="validated[abs][email]" name="wysija[user][abs][email]" /></span><input type="submit"  class="wysija-submit wysija-submit-field" name="submit" value="Subscribe!"/></p><input type="hidden" name="formid" value="form-wysija-nl-php-2" />
                    <input type="hidden" name="action" value="save" />
                <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
                <input type="hidden" name="message_success" value="Check your inbox now to confirm your subscription." />
                <input type="hidden" name="controller" value="subscribers" /><input type="hidden" value="1" name="wysija-page" /></form></div>        <center>
    </div>

    <div id="wrapper" class="clearfix">
        
        <div id="main" class="clearfix">

            <?php /* ?>

            <div class="header-wrapper clearfix">
                <!-- grab the logo -->
                <?php if ( of_get_option('of_logo') ) { ?>
                    <div class="logo-img">
                        <a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php echo of_get_option('of_logo'); ?>" alt="<?php the_title(); ?>" /></a>
                    </div>
                <!-- otherwise show the site title and description -->  
                <?php } else { ?>
                    
                <div class="logo-default">
                    <div class="logo-text">
                        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a>
                        <br />
                        <span><?php bloginfo('description') ?></span>
                    </div>
                </div>
                <?php } ?>    
                
                <div class="top-bar">           
                    <div class="menu-wrap">
                        <?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?> 
                    </div>
                </div><!-- top bar -->
            </div><!-- header wrapper -->
            
            <!-- secondary menu -->
            <?php if ( has_nav_menu( 'secondary' ) ) { ?>
                <div class="secondary-menu-wrap">
                    <?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'secondary-menu')); ?>
                </div>
            <?php } ?>
    
            <?php */ ?>


            <!--    
            <div class="headerlogo">
                <div class="refreshedlogo">
                    <a href="http://refreshed.is" title="Refreshed.is - Thoughts and findings from the family at Holstee"> 
                        <img src="http://refreshed.is/wp-content/themes/author-child/images/Refreshed_Logo.png" />
                    </a>
                </div>
                <div class="scroll-excerpt">
                    Thoughts on <a href="http://refreshed.is/tagged/sustainability"
                    title="Refreshed Sustainability">sustainability</a>, <a
                    href="http://refreshed.is/tagged/design" title="Refreshed Design">design</a>,
                    <a href="http://refreshed.is/tagged/travel" title="Refreshed
                    Travel">travel</a>, <a href="http://refreshed.is/tagged/food" title="Refreshed
                    Food">food</a> and finding your <a href="http://refreshed.is/tagged/passion"
                    title="Refreshed Design">passion</a>, from the family at  <a
                    href="http://holstee.com.com" title="Holstee">Holstee</a>.
                </div>
            </div>
            <hr style="clear:both; border: 0px transparent solid;">
             -->

            <div id="header">
                <div style="padding-left:120px;">
                    <div id="header-icon" class="float">
                        <a href="http://refreshed.is" title="Refreshed.is - Thoughts and findings from the family at Holstee"><img src="http://refreshed.is/wp-content/themes/author-child/images/Refreshed_Logo.png"></a>
                    </div>
                    <div id="header-text">
                        <p>
                            Thoughts on <a href="http://refreshed.is/category/sustainability" title="Refreshed Sustainability">sustainability</a>, <a href="http://refreshed.is/category/design" title="Refreshed Design">design</a>, <a href="http://refreshed.is/category/travel" title="Refreshed Travel">travel</a>, <a href="http://refreshed.is/category/food" title="Refreshed Food">food</a> and finding your <a href="http://refreshed.is/category/passion" title="Refreshed Design">passion</a>, from the family at <a href="http://holstee.com" target="_blank" title="Holstee">Holstee</a>.
                        </p>
                    </div>
                </div>
            </div>