<!-- Load Head -->
<?php get_template_part('head'); ?> 

<!-- ################# cabeçalho ############################ -->
<?php get_template_part('header'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 


<!-- ################# conteúdo ########################## -->
<div class="clearfix container">
	<div class="content-container">
		<article>
			<div class="img-container"><?php the_post_thumbnail(array(803,328)); ?></div>
			<h1><?php the_title(); ?></h1>
			<div class="post-info">
				<div class="post-info tag-categoria"><?php the_category(); ?></div>
      			<span class="post-data"><?php the_date('d \d\e F'); ?></span>
			</div>
			<div class="post-lead"><?php the_excerpt(); ?></div>
			<div class="share-buttons">
				<h4 class="share">Compartilhe</h4 >
				<span class="fio"></span>
				<div class="fb-like" data-href="http://www.revisaoparaque.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="pt_br">Tweet</a>
				<div class="g-plusone"></div>
			</div>
			<div class="main-content">
				<?php the_content() ?>
			</div>
		</article>

	<!-- ################# Share ######################### -->

		<section class="share-read-comment">
			<h4>COMPARTILHE, LEIA MAIS  e COMENTE</h4>
			<div class="fb-like" data-href="http://www.revisaoparaque.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
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
		<div class="single newsletter">
			<form action="">
				<h3>Receba novidades esclusivas no seu e-mail!</h3>
				<input type="text" placeholder="Qual é o seu e-mail?">
				<button class="btn">cadastrar</button>		
			</form>
		</div>

		<!-- Author Info -->
		<div class="author-info">
			<div class="author-photo"><img src="img/author-photo.png"></div>
			<h4><?php the_author(); ?></h4>
			<p><?php the_author_meta( description, $userID ); ?><p>
			<?php the_author_link(); ?> 
			<?php the_author_posts(); ?> 
		</div>

	</aside>
</div><!-- End Container -->

<?php endwhile; else: ?><p><?php _e('Desculpe, não temos posts disponíveis.'); ?></p><?php endif; ?>
<!-- ################# rodapé ############################ -->
<?php get_template_part('footer'); ?> 


</body>
</html>