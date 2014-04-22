<!-- Load Head -->
<?php get_template_part('head'); ?> 

<!-- ################# cabeçalho ############################ -->
<?php get_template_part('header'); ?> 


<!-- ################# conteúdo ########################## -->
<div class="clearfix container">
	<div class="content-container">
		<article>
			<div class="img-container"><?php the_post_thumbnail(array(803,328)); ?></div>
			<h1><?php the_title(); ?></h1>
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
			<h4>Carolina Machado</h4>
			<p>Idealizou este blog e, desde então, briga diariamente com HTML, CSS e design. Graduada em Letras pela PUCRS. Revisora de textos e editora de conteúdo. Tem pretensões de dominar o mundo, só não sabe muito bem como.<p>
			<a href="">Conheça o autor.</a>
			<a href="">Outros posts deste autor.</a>
		</div>

	</aside>
</div><!-- End Container -->


<!-- ################# rodapé ############################ -->
<?php get_template_part('footer'); ?> 


</body>
</html>