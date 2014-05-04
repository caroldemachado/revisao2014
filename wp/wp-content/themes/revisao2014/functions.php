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
 

// Limite de caracteres
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt);
} else {
$excerpt = implode(" ",$excerpt).' (...)';
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}

/** Pagination */
function pagination_funtion() {
// Get total number of pages
global $wp_query;
$total = $wp_query->max_num_pages;
// Only paginate if we have more than one page                   
if ( $total > 1 )  {
    // Get the current page
    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;        
        $big = 999999999;
        // Structure of "format" depends on whether weâ€™re using pretty permalinks
        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'type' => 'list'
        ));
    }
}
/** END Pagination */

?>