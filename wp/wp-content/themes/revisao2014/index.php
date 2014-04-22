<!-- Load Head -->
<?php get_template_part('head'); ?> 


<!-- ################# cabeçalho ############################ -->
	<header>
		<div class="container">
			<div class="logo"><a href="<?php bloginfo('url')?>" title="voltar para a home"><img src="<?php bloginfo('template_url') ?>/img/logo-revisao-para-que.png" alt="Logotipo Revisão para quê?"></a></div>
			<div class="info-topo">
				<nav class="menu-paginas">
  			 		<?php wp_nav_menu( array( 'theme_location' => 'meu_menu' ) ); ?>
  				</nav>
  				<ul class="social-icons">
     				<li><a href=""><img src="<?php bloginfo('template_url') ?>/img/twitter.png" alt="twitter"></a></li>
     				<li><a href=""><img src="<?php bloginfo('template_url') ?>/img/facebook.png" alt="facebook"></a></li>
     				<li><a href=""><img src="<?php bloginfo('template_url') ?>/img/youtube.png" alt="youtube"></a></li>
   				</ul>
  			</div>
  		</div>
		<div class="menu-categorias">
			<div class="container">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'menu_de_categorias' ) ); ?>
 				</nav>
 			</div>
 		</div>
	</header>
<!-- ################# frase destaque ############################## -->
		<section class="frase-destaque">
			<div class="container">
				<blockquote>"Toda vez que manda um texto para ser publicado, o autor se coloca nas mãos do revisor, esperando que seu parceiro não falhe." (L.F. Verissimo)</blockquote>

<!-- ################# newsletter ############################## -->
    			<div class="newsletter">
    				<form action="">
		     			<h3>Receba novidades esclusivas no seu e-mail!</h3>
		     			<input type="text" placeholder="Qual é o seu e-mail?">
		      			<button class="btn">cadastrar</button>	      			
	      			</form>
    			</div>
			</div>
		</section>

<!-- ################# conteúdo recente ############################ -->
		<section class="conteudo-recente">
			<div class="container">

				<!--  Repete aqui-->
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post-box">
					<a href="<?php the_permalink() ?>">
	      				<?php the_post_thumbnail(array(520,250)); ?></a>
	      				<h2><?php the_title(); ?></h2>
      				</a>
      				<div class="post-info tag-categoria"><?php the_category(); ?></div>
      				<span class="post-data"><?php the_date('d \d\e F'); ?></span>
      				<p><a href=""><?php the_excerpt(); ?></a></p>
    			</article>

				<!--  Até aqui aqui-->
    			<?php endwhile; else: ?><p><?php _e('Desculpe, não temos posts disponíveis.'); ?></p><?php endif; ?>



		</section>
<!-- ################# banner ############################ -->
		<section class="banner-half">
			<div class="container">
				<img src="<?php bloginfo('template_url') ?>/img/full-banner.png" alt="revisão de texto para blogs"/>
			</div>
		</section>
<!-- ################# conteúdo ############################ -->
		<section class="conteudo-geral">
			<div class="container clearfix">
				<!--  Repete aqui-->
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="post-box">
					<a href="<?php the_permalink() ?>">
		      			<?php the_post_thumbnail(array(240,115)); ?></a>
		      			<h2><?php the_title(); ?></h2>
	      			</a>
	      			<div class="post-info tag-categoria"><?php the_category(' '); ?></div>
	      			<p><a href=""><?php the_excerpt(); ?></a></p>
    			</article>
    			<!--  Até aqui aqui-->
    			<?php endwhile; else: ?><p><?php _e('Desculpe, não temos posts disponíveis.'); ?></p><?php endif; ?>
    			<ul>
					<li class="clicked"><a href="">1</a></li>
					<li><a href="">2</a></li>
    				<li><a href="">3</a></li>
    				<li><a href="">4</a></li>
    				<li><a href="">5</a></li>
    				<li><a href="">6</a></li>
    				<li><a href="">7</a></li>
    				<li><a href="">8</a></li>
    			</ul>
    		</div>
		</section>
<!-- ################# rodapé ############################ -->
		<footer>
			<div class="container">
				<aside>
					<div>
						<a href="">
							<h3>Solicite uma revisão</h3>
							<p>Saiba mais sobre o nosso método de trabalho e como entrar em contato conosco.</p>
							<a href="" class="btn">acessar</a>
      					</a>
      				</div>
				</aside>
				<aside>
					<div>
						<a href="">
							<h3>Calculadora de laudas</h3>
							<p>Nunca foi tão fácil calcular laudas. Experimente. =)</p>
							<a href="" class="btn">acessar</a>
      					</a>
      				</div>
				</aside>
				<aside>
					<div>
						<a href="">
							<h3>Calculadora de laudas</h3>
							<p>Nunca foi tão fácil calcular laudas. Experimente. =)</p>
							<a href="" class="btn">acessar</a>
      					</a>
      				</div>
				</aside>
			</div>
				<section class="creative-commons">
					<div class="container">
						<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" src="<?php bloginfo('template_url') ?>/img/copy.png"></a>
	      				<p>2011-2014 revisaoparaque.com - Alguns direitos reservados. <a href="">Conheça.</a></p>
	      				<a class="logo-fefo"><img src="<?php bloginfo('template_url') ?>/img/logo-fernando-aguirre.png" alt="logo-fefo"></a>
      				</div>
				</section>
			</div>

			<!-- WP Header --> 
			<?php wp_footer() ?>
			<!-- // WP Header --> 
		</footer>
	</body>
</html>