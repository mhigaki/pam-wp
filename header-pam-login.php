<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- External CSS libraries -->         
        <!-- Custom stylesheet -->
        <!-- Favicon icon -->
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico" type="image/x-icon">
        <!-- Google fonts -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script  src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
    <script  src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.min.js"></script>
    <script  src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <div class="page_loader"></div>
        <!-- Contact section start -->
        <div class="contact-section overview-bgi">