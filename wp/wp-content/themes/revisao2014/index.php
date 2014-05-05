<!-- Load Head -->
<?php get_template_part('head'); ?> 

<!-- ################# cabeçalho ############################ -->
<?php get_template_part('header'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 


<!-- ################# conteúdo ########################## -->
<div class="clearfix container">
	<div class="content-container">
		<article>
			<div class="img-container"><?php the_post_thumbnail( 'single-thumb'); ?></div>
			<h1><?php the_title(); ?></h1>
			<div class="main-content">
				<?php the_content() ?>
			</div>
		</article>
	</div><!-- End Content container -->



	<!-- ################# Sidebar ######################## -->
	<aside class="sidebar">

		<!-- Newsletter -->
		<div class="single newsletter">
			<?php get_template_part('newsletter','form'); ?> 
		</div>

		<!-- Author Info -->
		<div class="author-info">
			<div class="author-photo"><?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '100' ); }?></div>
			<h4><?php the_author(); ?></h4>
			<p><?php the_author_meta( description, $userID ); ?><p>
			<a href="<?php the_author_url(); ?>">Saiba mais sobre o autor.</a> 
			<a href"<?php the_author_posts(); ?>">Mais posts desse autor.</a> 
		</div>

	</aside>
</div><!-- End Container -->


<!-- ################# rodapé ############################ -->
<?php get_template_part('footer'); ?> 


</body>
</html>