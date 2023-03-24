<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.png">

    <?php wp_head(); ?>

</head>
<body <?php body_class();?>>
<?php wp_body_open();?>
<header>
    <nav class="main-menu">
        <ul class="menu">
        <?php
        wp_nav_menu(['theme_location' => 'primary-menu']);
        ?>
          </ul>
    </nav>
</header>
