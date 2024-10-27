<?php
register_block_pattern(
    'uab-dragon/content-section',
    array(
        'title'       => __('Content Section', 'uab-dragon'),
        'categories'  => array('content'),
        'content'     => '<!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":123,"url":"' . get_template_directory_uri() . '/assets/images/content-500x400.jpg","sizeSlug":"large","alt":"Scenic mountain landscape with a lake"} --><figure class="wp-block-image size-large"><img src="' . get_template_directory_uri() . '/assets/images/content-500x400.jpg" alt="Scenic mountain landscape with a lake" class="wp-image-123"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>Welcome to UAB</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Experience excellence in education at the University of Alabama at Birmingham. Join our diverse community of learners and innovators.</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Learn More</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns -->'
    )
);

