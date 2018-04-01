<?php 
add_theme_support('custom-logo', array(
'height' => 100,
'widht'  => 400,
'flex-height' => true,
'flex-width'  => true,
'header-text' => array( 'site-title', 'site-description'
),
)
);

 ?>
<!--Menu-->
<?php 
function register_my_menu() {
	register_nav_menu('header-menu',__('Header Menu'));
}

add_action('init', 'register_my_menu');


 ?>

