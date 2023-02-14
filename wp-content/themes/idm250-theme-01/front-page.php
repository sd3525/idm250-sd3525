<?php get_header(); ?>

<h1>Page Page </h1>

<?php

if (have_posts()) {

while (have_posts()) {

    the_post();

    the_content();

} 

} else {

    echo 'no posts found';
}

?>

<?php get_template_part('components/content'); ?>

<?php get_footer(); ?>

