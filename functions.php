<?php

// Remove WP version meta
remove_action('wp_head', 'wp_generator');

// Custom login page
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            height: 200px;
            width: 200px;
            background-size: cover;
            margin-top: -60px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Resource Center: TGM • POEFF • DFP • RJA';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


?>