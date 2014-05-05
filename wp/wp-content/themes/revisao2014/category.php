<!-- Load Head -->
<?php get_template_part('head'); ?> 


<!-- ################# cabeçalho ############################ -->
	<?php get_template_part('header'); ?> 


<!-- ################# frase destaque ############################## -->
		<section class="frase-destaque">
			<div class="container">
				<blockquote>"Toda vez que manda um texto para ser publicado, o autor se coloca nas mãos do revisor, esperando que seu parceiro não falhe." (L.F. Verissimo)</blockquote>

<!-- ################# newsletter ############################## -->
    			<div class="newsletter">
					<?php get_template_part('newsletter','form'); ?> 
    			</div>
			</div>
		</section>



<!-- ################# conteúdo ############################ -->
		<section class="conteudo-geral">
			<div class="container clearfix">
				<!--  Repete aqui-->
				<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

		</section>


		<!-- ################# rodapé ############################ -->
		<?php get_template_part('footer'); ?> 

			
	</body>
</html>