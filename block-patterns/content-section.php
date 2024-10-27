<?php
register_block_pattern(
    'uab-dragon/content-section',
    [
        'title'       => __('Content Section', 'uab-dragon'),
        'categories'  => ['content'],
        'content'     => '
            <!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:image {"url":"https://picsum.photos/500/400"} /-->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:heading -->
                    <h2>Heading</h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu sapien eget neque sodales pulvinar.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link">Button</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        '
    ]
);

