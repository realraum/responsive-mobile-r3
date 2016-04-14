<?php

/**
* Adds header logo or site name to header
*/
function responsive_mobile_r3_header_branding() {
?>
<div id="logo">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url" title="<?php echo esc_attr( get_bloginfo( 'title' ) ) ?>">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/realraum-logo-red.svg'; ?>"  alt="<?php echo esc_attr( get_bloginfo( 'title' ) ) ?>" itemprop="image">
    </a>
</div>
<?php
}
add_action( 'responsive_mobile_header_one', 'responsive_mobile_r3_header_branding' );
