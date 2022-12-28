<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bakes_And_Cakes
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

// my insert for output title of post			
// the_title('<h1>','</h1>');
?>
<!-- my insert -->
<!-- <input type="button" value="Заказать товар" onclick="location.href='zakaz/?tovar=<?php the_title(); ?>'"  -->
<!-- <input type="button" value="Заказать товар" onclick="location.href='contact.htm/?tovar=<?php the_title(); ?>'" -->


<!-- <input type="button" value="Заказать товар" onclick="location.href='contact/?tovar=название товара'" -->
<form>

<a href='http://enot.loc/wp-content/themes/bakes-and-cakes-enot/feedback/index.html'><img src="http://enot.loc/wp-content/themes/bakes-and-cakes-enot/button_zakazat-tovar.png">


<!-- <input type="button" value="Заказать товар" img src="button_zakazat-tovar.png" onclick="location.href='http://enot.loc/wp-content/themes/bakes-and-cakes-enot/feedback/index.html'"> -->

</form>	

<!-- Вывод формы в самой записи -->
<!-- <?php 
// echo do_shortcode('[contact-form-7 id="27" title="Контактная форма 1"]' ); 
?> -->



<?php

// my insert
// $post = get_post();
// $title = $post->post_title;

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
