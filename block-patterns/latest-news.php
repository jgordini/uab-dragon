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
                        <!-- wp:image {"url":"https://picsum.photos/400/300"} /-->
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

