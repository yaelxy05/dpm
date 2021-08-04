<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ===========================================================================================
// load assets
require __DIR__ . '/includes/load-assets.php';
// ===========================================================================================
// theme configuration
require __DIR__ . '/includes/theme-configuration.php';

// ===========================================================================================
// acf configuration
require __DIR__ . '/includes/acf-configuration.php';


function handle_flash_message()  {
    if(!isset($_SESSION['flash-message'])) {
        return;
    }

    $message = $_SESSION['flash-message'];
    unset($_SESSION['flash-message']);

    ?>
        <div class="flash-message" style="position: fixed; bottom: 40px; left: 50%; transform: translateX(-50%); padding: 30px; background-color: green; ">
            <?php echo $message; ?>
        </div>

        <script>
            setTimeout(function() {
                document.querySelector('.flash-message').remove();
            }, 5000);
        </script>
    <?php 
}