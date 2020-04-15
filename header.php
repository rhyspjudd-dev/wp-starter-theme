<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    
    <!-- animate.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/vendor/css/animate.min.css' ?>"/>

    <!-- font-awesome 5.13.0 -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/vendor/css/fontawesome.min.css' ?>"/>

    <title><?php wp_title(''); ?></title>
    
</head>
<body <?php body_class(); ?>>