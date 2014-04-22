<header>
		<div class="container">
			<div class="logo"><a href="<?php bloginfo('url')?>" title="voltar para a home"><img src="<?php bloginfo('template_url') ?>/img/logo-revisao-para-que.png" alt="Logotipo Revisão para quê?"></a></div>
			<div class="info-topo">
				<nav class="menu-paginas">
  			 		<?php wp_nav_menu( array( 'theme_location' => 'meu_menu' ) ); ?>
  				</nav>
  				<ul class="social-icons">
     				<li><a href="http://www.twitter.com/revisaoparaque"><img src="<?php bloginfo('template_url') ?>/img/twitter.png" alt="twitter"></a></li>
     				<li><a href="http://www.facebook.com/revisaoparaque"><img src="<?php bloginfo('template_url') ?>/img/facebook.png" alt="facebook"></a></li>
     				<li><a href="http://www.youtube.com/blogrevisaoparaque"><img src="<?php bloginfo('template_url') ?>/img/youtube.png" alt="youtube"></a></li>
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