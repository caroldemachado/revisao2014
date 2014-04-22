<?php 

// Arquivo de funções do Thema

// 1 - Adicona o thumbnail
add_theme_support( 'post-thumbnails' ); 

//2 - adicionar menu
if ( function_exists( 'register_nav_menu' ) ) {
register_nav_menu( 'meu_menu', 'Este é meu primeiro menu' );
register_nav_menu( 'menu_de_categorias', 'Este é meu segundo menu' );
//register_nav_menu( 'segundo_menu', 'Este é meu segundo menu' );
}
 ?>

