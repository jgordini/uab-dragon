<?php
register_block_pattern(
    'uab-dragon/latest-news',
    [
        'title'       => __('Latest News', 'uab-dragon'),
        'categories'  => ['news'],
        'inserter'    => true,
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
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:image {"id":126,"url":"' . get_template_directory_uri() . '/assets/images/news-500x400.jpg","sizeSlug":"large","alt":"Aerial view of ocean waves meeting sandy beach"} -->
                        <figure class="wp-block-image size-large"><img src="' . get_template_directory_uri() . '/assets/images/news-500x400.jpg" alt="Aerial view of ocean waves meeting sandy beach" class="wp-image-126"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:heading {"level":4} -->
                        <h4>New Research Center Opens</h4>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>State-of-the-art facility to advance medical research.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:image {"id":127,"url":"' . get_template_directory_uri() . '/assets/images/news-500x400.jpg","sizeSlug":"large","alt":"Aerial view of ocean waves meeting sandy beach"} -->
                        <figure class="wp-block-image size-large"><img src="' . get_template_directory_uri() . '/assets/images/news-500x400.jpg" alt="Aerial view of ocean waves meeting sandy beach" class="wp-image-127"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:heading {"level":4} -->
                        <h4>Student Achievement Recognition</h4>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Outstanding accomplishments in academic research.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        '
    ]
);

