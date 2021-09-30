<?php
/**
 * Plugin Name: dpm
 * Author: Dressing des petites mains
 * Description: dressing des petites mains
 */

use DPM\Plugin;

require __DIR__ . '/vendor-dpm/autoload.php';

$dpm = new Plugin();

register_activation_hook(
    __FILE__,
    [$dpm, 'activate']
);

register_deactivation_hook(
    __FILE__,
    [$dpm, 'deactivate']
);

