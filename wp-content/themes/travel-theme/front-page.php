<?php get_header(); ?>

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

