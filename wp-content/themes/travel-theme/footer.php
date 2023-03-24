
<footer>
    <nav class="foot-menu">
        <?php
        wp_nav_menu(['theme_location' => 'footer-menu']);
        ?>
    </nav>
    <div class="center">
        <p class="year">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>