<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GoGrady</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=no"/>
        <meta name="google-site-verification" content="3viYqViBjw62dyyOzg7I-qYW6QAiJz3hIp_NNNKPnG8" />
        <link rel="apple-touch-icon" href="/wp-content/themes/grady_theme/img/icon.png"/>
        <link rel="shortcut icon" sizes="112x112" href="/wp-content/themes/grady_theme/img/icon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>
            $(document).ready(function() {
                $('footer').css("bottom",0);
                });
            });
        </script>
        <?php if (is_home()){ ?>
        <script src="<?php bloginfo('template_url'); ?>/js/home_page.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.imagemapster.min.js"></script>
        <?php }?>
        <?php if ('students' == get_post_type() || 'alumni' == get_post_type()){ ?>
        <script src="<?php bloginfo('template_url'); ?>/js/person_animations.js"></script>
        <?php }?>
        <?php if ('peabody_awards' == get_post_type()){ ?>
        <script src="<?php bloginfo('template_url'); ?>/js/award_animations.js"></script>
        <?php }?>
        <?php if (is_page('history')){ ?>
        <script src="/wp-content/themes/grady_theme/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/wp-content/themes/grady_theme/bootstrap.min.css"/>
        <script type="text/javascript" src="/wp-content/themes/grady_theme/js/jquery.carouFredSel.js"></script>
        <?php }?>
        <script>
            $(document).ready(function() {
                $('#menu-button').on("click",function(){
                    $('.nav-mobile').toggleClass("_hidden");
                });
            });
        </script>
        <?php wp_head(); ?>
    </head>
    <body <?php if(is_home()){ ?>onresize="checkSize()"<?php }?>>
        <header class="">
            <a href="<?php echo get_site_url(); ?>">
                <img id="logo" src="/wp-content/themes/grady_theme/img/logo.png" alt="logo"/>
            </a>
            <button id="menu-button">Menu</button>
            <a href="<?php echo site_url() ?>"><img id="home_icon" src="/wp-content/themes/grady_theme/img/home_icon.png"/></a>
            <?php wp_nav_menu( array(
                    'menu' => 'Main Menu',
                    'theme_location' =>'primary',
                    'container' => false,
                    'menu_class' => 'nav-mobile _hidden',
                    'fallback_cb' =>false,
                    menu_id => ''
            ));?>
        </header>