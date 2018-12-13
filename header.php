<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  


    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

   <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">

   <?php

    //INSERINDO SCRIPTS JS E BOOTSTRAP
    function my_scripts_loader() {
        wp_enqueue_script( 'jquery',get_template_directory_uri().'/js/jquery.min.js', false );
        wp_enqueue_script( 'bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', false );
        wp_enqueue_script( 'script',get_template_directory_uri().'/js/scripts.js', false );
    }

    add_action( 'wp_enqueue_scripts', 'my_scripts_loader' );
    
    ?>



</head>
<body>

<?php wp_head();?>
