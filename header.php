<?php
/**
 * The header template
 *
 *
 * @package delighted_calligraphy
 */
?>
<!DOCTYPE html>

<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( "charset" ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- favicon & links -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />

    <!-- stylesheets are enqueued via functions.php -->

    <!-- scripts  -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.min.js" type="text/javascript"></script>
    <![endif]-->



    <?php // Lets other plugins and files tie into our theme's <head>:  
    wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">
    <header class="header" role="banner">     
            
            <div class="logo">
                <a href="<?php echo esc_url( home_url( "/" ) ); ?>">
                    <?php get_template_part( 'assets/images/logo.svg' );
                    ?>
                </a>
            </div>  
            <a class="assistive-text" href="#main">Skip to content</a>
            <div class="primary-nav">
                <nav class="access" role="navigation">
                    <?php 
                        $args = array (
                            'theme_location'  => 'primary', 
                            'container'       => '',
                            'container_class' => 'false',
                            'menu_class'      => 'access__list'
                        ); ?>

                    <?php wp_nav_menu( $args ); ?>
                </nav>
            </div>    
            <button class="access__toggle">
                <span></span>
            </button>
        
    </header>





