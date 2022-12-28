<?php

// child theme Bakes and Cakes

// don't delete code below 

// функция загрузки CSS из родительской темы в дочерней темы.

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
    
function enqueue_parent_styles() {
   wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
}

 
/**
my insert from 17/04/2018 for new footer

*/
function bakes_and_cakes_footer_info(){
	    ?>
	    <div class="site-info">       
	        <span>	 Пряники от Енота Copyright All Rights Reserved &copy; <?php echo date('Y');?>   </span>
	    </div> 	<!-- .site-info -->
	<?php
	}
add_action( 'bakes_and_cakes_footer', 'bakes_and_cakes_footer_info' );


/*Мои настройки с сайта mihaylovblog.com/kompyutery-i-internet/dobavlenie-tekstovogo-polya-v-adminku-wordpress.html */
function my_adress(){
add_settings_field(
'adress',
'Адрес',
'callback_adress',
'general'
);
register_setting(
'general',
'our_adress'
);
}
add_action('admin_init', 'my_adress');
function callback_adress(){
echo "<input class='regular-text' type='text' name='our_adress' value=''>";
}

// my insert get request (запрос) for contact form 7
wpcf7_add_shortcode('getzapros', 'wpcf7_getzapros_shortcode_handler', true);
function wpcf7_getzapros_shortcode_handler($tag) {
if (!is_array($tag)) return '';
$name = $tag['name'];
if ($_GET[$name]=='') {
$html = '';
}
else
{
$html = '<input type="text" name="' . $name . '" value="'. $_GET[$name] . '" />';
}
return $html;
}


?>