<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part('components/content');?>

</article>

<?php 

// $currentPostId = get_the_id();

// $terms = get_the_terms($currentPostId, 'category');

// foreach ($terms as $term) {

//     echo $term->name;
// }

?>

<?php get_footer(); ?>