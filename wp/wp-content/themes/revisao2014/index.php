<!-- Load Head -->
<?php get_template_part('head'); ?> 


<!-- ################# cabeçalho ############################ -->
	<?php get_template_part('header'); ?> 


<!-- ################# frase destaque ############################## -->

				<?php query_posts( array( 'posts_per_page' =>4) );
				if (have_posts() ) : ?>
		<section class="frase-destaque">
			<div class="container">
				<blockquote><?php the_field('home-slogan') ?></blockquote>

<!-- ################# newsletter ############################## -->
    			<div class="newsletter">

					<?php get_template_part('newsletter','form'); ?> 

    			</div>
			</div>
		</section>

<!-- ################# conteúdo recente ############################ -->
		<section class="conteudo-recente">
			<div class="container">

				<!--  Repete aqui-->

				<?php while ( have_posts() ) : the_post(); ?>


				<article class="post-box">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(520,250)); ?></a>
	      			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      				<div class="post-info tag-categoria"><?php the_category(); ?></div>
      				<span class="post-data"><?php the_date('d \d\e F'); ?></span>
      				<p><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></p>
    			</article>

				<!--  Até aqui aqui-->
    			<?php endwhile; else: ?><p><?php _e('Desculpe, não temos posts disponíveis.'); ?></p><?php endif; ?>



		</section>
<!-- ################# banner ############################ -->
		<section class="banner-half">
			<div class="container">
				<a href="#"><img src="<?php bloginfo('template_url') ?>/img/full-banner.png" alt="revisão de texto para blogs"/></a>
			</div>
		</section>
<!-- ################# conteúdo ############################ -->
		<section class="conteudo-geral">
			<div class="container clearfix">
				<!--  Repete aqui-->
				<?php query_posts( array( 'posts_per_page' =>12, 'offset' => 4) );
				if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post-box">
					<a href="<?php the_permalink() ?>">
		      			<?php the_post_thumbnail('home-thumb-small'); ?>
		      			<h2><?php the_title(); ?></h2>
	      			</a>
	      			<div class="post-info tag-categoria"><?php the_category(' '); ?></div>
	      			<p>
	      				<a href="<?php the_permalink() ?>">
	      				<?php echo excerpt('30'); ?></a>
	      			</p>
    			</article>
    			<!--  Até aqui aqui-->
    			<?php endwhile; else: ?><p><?php _e('Desculpe, não temos posts disponíveis.'); ?></p><?php endif; ?>
	    		<div>
	    			<?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
	    			
	 
	    		</div>
		</section>
<!-- ################# rodapé ############################ -->
		<?php get_template_part('footer'); ?> 

			
	</body>
</html>