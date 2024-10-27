<?php
register_block_pattern(
    'uab-dragon/latest-news',
    [
        'title'       => __('Latest News', 'uab-dragon'),
        'categories'  => ['news'],
        'content'     => '
            <!-- wp:group {"align":"full"} -->
            <div class="wp-block-group alignfull">
                <!-- wp:heading {"textAlign":"center"} -->
                <h2 class="has-text-align-center">Latest News</h2>
                <!-- /wp:heading -->
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:image {"id":125,"url":"' . get_template_directory_uri() . '/assets/images/news-500x400.jpg","sizeSlug":"large","alt":"Aerial view of ocean waves meeting sandy beach"} -->
                        <figure class="wp-block-image size-large"><img src="' . get_template_directory_uri() . '/assets/images/news-500x400.jpg" alt="Aerial view of ocean waves meeting sandy beach" class="wp-image-125"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:heading {"level":4} -->
                        <h4>Biology professor honored with Award of Excellence</h4>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>For his contributions to algae research.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                    <!-- More columns as needed -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        '
    ]
);

