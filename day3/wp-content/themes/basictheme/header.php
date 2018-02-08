<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?> >
   
   
   <!-- Site-header -->
   <header class="site-header">
       <h1><a href="<?php echo home_url(); ?>" > <?php bloginfo('name'); ?></a></h1>
       <h5><?php bloginfo('description'); ?></h5>
   </header>
   
   
   
   
   
    