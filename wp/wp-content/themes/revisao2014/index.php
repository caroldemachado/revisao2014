<html>
  <head>
    <title>Revisão para quê? | Revisão de texto com bom humor</title>
    <link href="<?php bloginfo('template_url') ?>/css/reset.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/style.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic,300italic' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic,700italic' rel='stylesheet' type='text/css'>
    <meta name="description" content="O Revisão para quê? é um site sobre revisão, redação e leitura de textos.">
    <meta charset="utf-8">
  </head>
<body>
<!-- ################# cabeçalho ############################ -->
	<header>
		<div class="container">
			<div class="logo"><img src="<?php bloginfo('template_url') ?>/img/logo-revisao-para-que.png" alt="Logotipo Revisão para quê?"></div>
			<div class="info-topo">
				<nav class="menu-paginas">
  			 		<ul>
    			 		<li><a href="">sobre</a></li>
    			 		<li><a href="">e-book</a></li>
    			 		<li><a href="">para empresas</a></li>
    			 		<li><a href="">contato</a></li>
  			 		</ul>
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
  					<ul>
				        <li><a href="">Vida de Revisor</a></li>
				        <li><a href="">Gramática</a></li>
				        <li><a href="">Dicas</a></li>
				        <li><a href="">Redação</a></li>
				        <li><a href="">Nova ortografia</a></li>
				        <li><a href="">TCC</a></li>
   					</ul>
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
					<a href="">
	      				<img src="http://revisaoparaque.com/blog/wp-content/uploads/2013/03/vidaderevisor.fw_.png" alt="thumb"/>
	      				<h2><?php the_title(); ?></h2>
      				</a>
      				<div class="post-info"><a class="tag-categoria" href="">vida de revisor</a><span class="post-data">3 de maio</span></div>
      				<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
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
			<div class="container">
				<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
    			</article>
    		<article class="post-box">
					<a href="">
		      			<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
		      			<h2>[App] Guia prático da nova ortografia</h2>
	      			</a>
	      			<a href="" class="tag-categoria">vida de revisor</a>
	      			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
				</article>
			<article class="post-box">
					<a href="">
						<img src="http://revisaoparaque.com/blog/wp-content/uploads/2014/03/vidaderevisor.fw_.png" alt="thumb"/>
			 			<h2>[App] Guia prático da nova ortografia</h2>
					</a>
					<a href="" class="tag-categoria">vida de revisor</a>
		  			<p><a href="">Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os primeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</a></p>
				</article> 
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
							<a href="" class="tag-categoria">acessar</a>
      					</a>
      				</div>
				</aside>
				<aside>
					<div>
						<a href="">
							<h3>Calculadora de laudas</h3>
							<p>Nunca foi tão fácil calcular laudas. Experimente. =)</p>
							<a href="" class="tag-categoria">acessar</a>
      					</a>
      				</div>
				</aside>
				<aside>
					<div>
						<a href="">
							<h3>Calculadora de laudas</h3>
							<p>Nunca foi tão fácil calcular laudas. Experimente. =)</p>
							<a href="" class="tag-categoria">acessar</a>
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
		</footer>
	</body>
</html>