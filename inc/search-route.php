<?php

add_action('rest_api_init', 'RR_register_routes');

function RR_register_routes() {
    register_rest_route('university/v1', 'feature12', array(
        'methods' => 'GET',
        'callback' => 'featured'
    ));
}

function featured() {
    $current_user_id = get_current_user_id();

    // WP_Query to get features by the current user
    $existQuery = new WP_Query(array(
        'author' => $current_user_id,
        'post_type' => 'feature',
        'post_status' => 'publish', // Ensure only published features are retrieved
    ));

    // Check if there are any posts
    if ($existQuery->have_posts()) {
        $features = array();

        while ($existQuery->have_posts()) {
            $existQuery->the_post();
            $features[] = array(
                'title' => get_the_title(),
                'permalink' => get_permalink(),
                'postType' => get_post_type(),
                'authorName' => get_the_author(),
            );
        }
        
        wp_reset_postdata(); // Reset the query

        return $features; // Return the array of features
    } else {
        return new WP_Error('no_features', 'No features found for this user', array('status' => 404));
    }
}
  ?>