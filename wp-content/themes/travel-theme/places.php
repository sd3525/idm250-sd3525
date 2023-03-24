<?php get_header(); /* Template Name: Sidebar */?>

<div class="container">
  <div class="content">
    <?php get_template_part('components/content');?>
  </div>
  <div class="sidebar">
    <?php get_template_part('components/sidebar'); ?>
  </div>
</div>

<?php get_footer(); ?>