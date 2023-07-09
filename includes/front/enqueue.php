<?php

function bh_enqueue_scripts()
{
    # Accomodation inquire form settings applied only to the villas
    if (is_singular('hb_villa')) {
        wp_enqueue_style('inquireEstraStyles', BH_PLUGIN_DIR . 'assets/css/inquireFormExtra.css', [], null, 'all');
        wp_enqueue_script('inquireExtraScript', BH_PLUGIN_DIR . 'assets/js/inquireFormExtra.js', [], null, true);
    }
}
