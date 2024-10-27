<?php
register_block_pattern(
    'uab-dragon/banner',
    array(
        'title'       => __('Banner Section', 'uab-dragon'),
        'categories'  => array('banner'),
        'content'     => '<!-- wp:cover {"url":"https://picsum.photos/seed/uab/1920/600","id":null,"dimRatio":50,"overlayColor":"black","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center">This is the banner title</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">this is the banner description</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><div class="wp-block-button"><a class="wp-block-button__link">Link 1</a></div>
<div class="wp-block-button"><a class="wp-block-button__link">Link 2</a></div>
<div class="wp-block-button"><a class="wp-block-button__link">Link 3</a></div>
<div class="wp-block-button"><a class="wp-block-button__link">Link 4</a></div></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->'
    )
);

