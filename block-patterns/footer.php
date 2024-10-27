<?php
register_block_pattern(
    'uab-dragon/footer',
    [
        'title' => __('Footer', 'uab-dragon'),
        'categories' => ['footer'],
        'content' => '
            <!-- wp:group {"align":"full","backgroundColor":"dark-green","textColor":"white"} -->
            <div class="wp-block-group alignfull has-dark-green-background-color has-white-color">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"level":4} -->
                        <h4>University Relations</h4>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Contact details here...</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link">Contact Us</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        '
    ]
);

