<?php
register_block_pattern(
    'uab-dragon/banner',
    array(
        'title' => __('Banner Section', 'uab-dragon'),
        'categories' => array('banner'),
        'inserter' => true,
        'content' => '<!-- wp:cover {"url":"' . get_template_directory_uri() . '/assets/images/default-header.jpg","id":124,"dimRatio":50,"minHeight":540,"minHeightUnit":"px","isDark":true,"align":"full","backgroundColor":"black"} -->
<div class="wp-block-cover alignfull has-black-background-color has-background" style="min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-124" alt="Person practicing martial arts in a modern fitness facility" src="' . get_template_directory_uri() . '/assets/images/default-header.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center">This is the banner title</h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">this is the banner description</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Link 1</a></div>
<!-- /wp:button -->
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Link 2</a></div>
<!-- /wp:button -->
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Link 3</a></div>
<!-- /wp:button -->
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Link 4</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->'
    )
);
