<?php handle_flash_message(); ?>

<footer class="section footer"> 

    <img class="footer-logo" src="<?= get_theme_file_uri('assets/images/IMG_2820.png') ?>" alt="logo">

    <nav class="footer-nav">
        <ul>
            <li><a href="<?php echo get_home_url() . '/mentions-legales'; ?>">Mentions légales</a></li>
            <li><a href="<?php echo get_home_url() . '/a-propos'; ?>">A propos</a></li>
            <li><a href="<?php echo get_home_url() . '/contact'; ?>">Contact</a></li>
        </ul>
    </nav>

</footer>  
    
    <?php
    wp_footer();
    ?>
</body>
</html>
