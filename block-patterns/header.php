<?php
register_block_pattern(
    'uab-dragon/header',
    array(
        'title'       => __('Header', 'uab-dragon'),
        'categories'  => array('header'),
        'inserter'    => true,
        'content'     => '<!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull"><!-- wp:site-logo /-->
<!-- wp:navigation {"itemsJustification":"center"} /-->
<!-- wp:button {"textAlign":"right"} -->
<div class="wp-block-button alignright"><a class="wp-block-button__link">☰</a></div>
<!-- /wp:button --></div>
<!-- /wp:group -->'
    )
);

