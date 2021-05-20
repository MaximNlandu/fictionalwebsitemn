<?php

/*
Plugin Name: My First Plugin
Description: This Plugin will change your life
*/

add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content) {
    $content = $content . '<p>All content belongs to fictional university.</p>';
    $content = str_replace('Lorem', '*****', $content);
    return $content;

}

add_shortcode('programCount', 'programCountFunction');

function programCountFunction() {
    $programsAmount = new WP_Query(array(
        'post_type' => 'program',
    ));
    return $programsAmount->found_posts;
}