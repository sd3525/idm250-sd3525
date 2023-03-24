<?php get_header(); ?>

<div class="front-page">
</div>

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


<?php get_footer(); ?>

