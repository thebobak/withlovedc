<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <?php //STYLESHEETS // ?>

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/app.css'; ?>" type="text/css" media="screen" />
       <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/foundation.min.css'; ?>" type="text/css" media="screen" /> -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />





        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php // Include Foundation JS //
        	wp_enqueue_script(
        			'foundation',
        			get_template_directory_uri() . '/js/foundation.min.js',
        			array( 'jquery' )
        			);
        ?>

        <script>
            $(document).foundation();
        </script>



        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrapper">