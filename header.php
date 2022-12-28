<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bakes_And_Cakes
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

      <!-- my insert for social networks -->
<div class="socialbutton" id="socbutton_pk">

  <p><b>Позвоните нам прямо сейчас для оформления заказов: +380954922711</b><br>
        Приглашаю Всех прямо сейчас присоединиться к нам!<br>         
  
<!-- link for plus.google.com -->
  <a target="_blank" rel="nofollow" href="http://plus.google.com/117261778689423011650">
  <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/Google_plus_red.png" style="margin-right: 1px;"></a>
<!-- link for instagram.png -->
  <a target="_blank" rel="nofollow" href="http://instagram.png">
  <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/intagram.png" style="margin-right: -10px;"></a>
<!-- link for email -->
  <a target="_blank" rel="nofollow" href="mailto:zakazkonditery@gmail.com">
  <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/mail.png" style="margin-right: -10px;"></a>
<!-- link for Viber -->
  <a id="vb_pk" title="Viber" target="_blank" rel="nofollow" href="viber://chat?number=+380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/viber.png" style="margin-right: -10px;"> </a>
  <a id="vb_mb" title="Viber" target="_blank" rel="nofollow" href="viber://add?number= +380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/viber.png" style="margin-right: -10px;"> </a>
  <style> 
  #vb_mb{display:none}                /*for mobile phone*/
  @media (max-width:1024px){ /*когда стр.отображ на экране с разрешением не более 1024px в ширину,примен след правило*/
  #vb_pk{display:none}                /*for desktop computer*/ 
  #vb_mb{display:block}}              /*for mobile phone*/
  </style>
<!-- link for Whatsapp -->
  <a title="WhatsApp" target="_blank" rel="nofollow" href="whatsapp://send?phone=+380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/whatsapp.png" style="margin-right: 10px;"> </a>
 
</div></p>
<!-- my insert for social networks in mobile -->
<div class="socialbutton_mobiln" id="socbutton_mb">
  <p>Телефон для оформления заказов: +380954922711</p>
 <a target="_blank" rel="nofollow" href="http://plus.google.com/117261778689423011650">
  <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/Google_plus_red_mob.png" style="margin-right: -10px;"></a>
<a target="_blank" rel="nofollow" href="http://instagram.png">
  <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/intagram_mob.png" style="margin-right: -10px;"></a>

  <a target="_blank" rel="nofollow" href="mailto:zakazkonditery@gmail.com">
  <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/mail_mob.png" style="margin-right: -10px;"></a>
<!-- link for Viber -->
  <a id="vb_pk" title="Viber" target="_blank" rel="nofollow" href="viber://chat?number=+380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/viber_mob.png" style="margin-right: -10px;"> </a>
  <a id="vb_mb" title="Viber" target="_blank" rel="nofollow" href="viber://add?number= +380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/viber_mob.png" style="margin-right: -10px;"> </a>
  <style> 
  #vb_mb{display:none}                /*for mobile phone*/
  @media (max-width:1024px){ /*когда стр.отображ на экране с разрешением не более 1024px в ширину,примен след правило*/
  #vb_pk{display:none}                /*for desktop computer*/ 
  #vb_mb{display:inline}}              /*for mobile phone*/
  </style>
<!-- link for Whatsapp -->
  <a title="WhatsApp" target="_blank" rel="nofollow" href="whatsapp://send?phone=+380954922711"> <img border="0" src="/wp-content/themes/bakes-and-cakes-enot/images/whatsapp_mob.png" style="margin-right: 10px;"> </a>  
</div>
      <style> 
        #socbutton_mb{display:none}         /*for mobile phone*/
        @media (max-width:1024px){ /*когда стр.отображ на экране с разрешением не более 1024px в ширину,примен след правило*/
        #socbutton_pk{display:none}                /*for desktop computer*/ 
        /*#socbutton_mb{display:block; margin-left:180px;}}*/
        #socbutton_mb{display:inline}}              /*for mobile phone*/
      </style>


<div id="page" class="site">
	
	<header id="masthead" class="site-header" role="banner">
		
		
	    <div class="header-t">
			  <div class="container">
				 <div class="site-branding">
    			<?php 
              if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                the_custom_logo();
              } ?>
    			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    			<?php
    			   $description = get_bloginfo( 'description', 'display' );
    			if ( $description || is_customize_preview() ) : ?>
    				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
    			<?php endif; ?>
    		</div><!-- .site-branding -->
        <div id="mobile-header">
          <a id="responsive-menu-button" href="#sidr-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </div>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		<!-- 		  my adj 05032018 -->	
		<img src="/wp-content/uploads/2018/03/enot_mini-1-100x100.jpg" style="margin-left: 120px !important"  alt="" width="150" height="150" class="alignnone size-thumbnail wp-image-48" />
				

<!-- 		<img src="http://a0191668.xsph.ru.xsph.ru/wp-content/uploads/2018/03/enot_big-150x150.jpg" alt="" width="150" height="150" class="alignnone size-thumbnail wp-image-44" />	
		 -->
		
		
		
		
	</header><!-- #masthead -->

  <?php $enable_slider    = get_theme_mod('bakes_and_cakes_ed_slider');
        $enabled_sections = bakes_and_cakes_get_sections();  
        $ed_breadcrumbs   = get_theme_mod('bakes_and_cakes_ed_breadcrumb');
        
        if( (is_front_page() || is_page_template('template-home.php')) && $enable_slider ) {
          
          do_action('bakes_and_cakes_slider');
       
        }

        if( is_home() || ! $enabled_sections || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ 
   	       
          echo '<div class="container">';
	          
            echo '<div id="content" class="site-content">'; 
              
              if($ed_breadcrumbs){ do_action('bakes_and_cakes_breadcrumbs'); }
        } ?>