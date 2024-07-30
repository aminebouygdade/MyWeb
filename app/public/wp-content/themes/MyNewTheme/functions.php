<?php

function uni_uni_filter(){
    wp_enq_script('uni_style', get_stylesheet_url());
}
add_action('wp_enq_script', 'uni_uni_filter');
