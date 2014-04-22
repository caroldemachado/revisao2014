<!-- Load Head -->
<?php get_template_part('head'); ?> 

<!-- ################# cabeçalho ############################ -->
	<header>
		<div class="container">
			<div class="logo"><a href="home.html"><img src="img/logo-revisao-para-que.png" alt="Logotipo Revisão para quê?"></a></div>
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
     				<li><a href=""><img src="img/twitter.png" alt="twitter"></a></li>
     				<li><a href=""><img src="img/facebook.png" alt="facebook"></a></li>
     				<li><a href=""><img src="img/youtube.png" alt="youtube"></a></li>
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



<!-- ################# conteúdo ########################## -->
<div class="clearfix container">
	<div class="content-container">
		<article>
			<div class="img-container"><img src="img/img-article.fw.png" alt="Titulo do post"/></div>
			<h1>TEXTO: 10 PASSOS PARA ESCREVER DE FORMA MAIS EFICIENTE</h1>
			<div class="post-info">
				<a class="tag-categoria" href="">vida de revisor</a>
				<span class="post-data">3 de maio</span>
			</div>
			<p class="post-lead">Ut sit amet mi nec nibh rutrum vehicula. Sed ultrices imperdiet mauris a ornare. Aliquam quis ante placerat, fermentum ante nec, tempor nisi.Nibh rutrum vehicula. Sed ultrices imperdiet mauris a ornare.</p>

			<div class="share-buttons">
				<h4 class="share">Compartilhe</h4 >
				<span class="fio"></span>
				<img src="img/img-share.png" class="img-share"/>
			</div>

			<div class="main-content">
				<?php the_content() ?>
			</div>
		</article>

	<!-- ################# Share ######################### -->

		<section class="share-read-comment">
			<h4>COMPARTILHE, LEIA MAIS  e COMENTE</h4>
			<img src="img/img-share.png" class="img-share"/>
		</section>


	<!-- ################# leia mais ######################### -->
		<section class="leia-mais">
			<div class="post-box">
				<a href="">
		  			<h3>[App] Guia prático da nova ortografia</h3>				
					<p>Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os rimeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</p>
				</a>
			</div>
			<div class="post-box">
				<a href="">
		  			<h3>[App] Guia prático da nova ortografia</h3>				
					<p>Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os rimeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</p>
				</a>
			</div>
			<div class="post-box">
				<a href="">
		  			<h3>[App] Guia prático da nova ortografia</h3>				
					<p>Hoje foi ao ar a conversa que tive com o Luciano Larrossa da Escola Freelancer. Lá falamos sobre como dar os rimeiros passos para torna-se um revisor freelancer, entre outros assuntos pertinentes à profissão.</p>
				</a>
			</div>
		 </section>

		 <!-- ################# Comments ######################## -->
		 <section class="comments">
		 	<p>Comentários aqui =)</p>
		 </section>
	</div><!-- End Content container -->


	<!-- ################# Sidebar ######################## -->
	<aside class="sidebar">

		<!-- Newsletter -->
		<div class="newsletter">
			<form action="">
				<h3>Receba novidades esclusivas no seu e-mail!</h3>
				<input type="text" placeholder="Qual é o seu e-mail?">
				<button class="btn">cadastrar</button>		
			</form>
		</div>

		<!-- Author Info -->
		<div class="author-info">
			<div class="author-photo"><img src="img/author-photo.png"></div>
			<h4 class="">Carolina Machado</h4>
			<p>Idealizou este blog e, desde então, briga diariamente com HTML, CSS e design. Graduada em Letras pela PUCRS. Revisora de textos e editora de conteúdo. Tem pretensões de dominar o mundo, só não sabe muito bem como.<p>
			<a href="">Conheça o autor.</a>
			<a href="">Outros posts deste autor.</a>
		</div>

	</aside>
</div><!-- End Container -->


<!-- ################# rodapé ############################ -->
<footer>
	<div class="container">
		<aside>
			<div>
				<a href="#um">
					<h3>Solicite uma revisão</h3>
					<p>Saiba mais sobre o nosso método de trabalho e como entrar em contato conosco.</p>
					<a href="#dois" class="tag-categoria">acessar</a>
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
				<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" src="img/copy.png"></a>
  				<p>2011-2014 revisaoparaque.com - Alguns direitos reservados. <a href="">Conheça.</a></p>
  				<a class="logo-fefo"><img src="img/logo-fernando-aguirre.png" alt="logo-fefo"></a>
				</div>
		</section>
	</div>
</footer>


</body>
</html>