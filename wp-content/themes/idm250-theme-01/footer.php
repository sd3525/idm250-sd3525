<?php wp_footer(); ?>

<footer>
    <nav class="foot-menu">
        <?php
        wp_nav_menu(['theme_location' => 'footer-menu']);
        ?>
    </nav>
    <div class="center">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>
</body>
</html>