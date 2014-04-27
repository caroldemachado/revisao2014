<!-- Load Head -->
<?php get_template_part('head'); ?> 

<!-- ################# cabeçalho ############################ -->
<?php get_template_part('header'); ?>

<!-- ################# conteúdo ########################## -->
<div class="clearfix container">
	<div class="content-container">
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	</div>


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


	</aside>
</div><!-- End Container -->


<!-- ################# rodapé ############################ -->
<?php get_template_part('footer'); ?> 


</body>
</html>