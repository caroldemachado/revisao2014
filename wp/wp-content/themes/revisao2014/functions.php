<?php 

// Arquivo de funções do Thema

// 1 - Adicona o thumbnail
add_theme_support( 'post-thumbnails' ); 

    // Set "Thumbnail" image size

    if (function_exists('add_theme_support')) {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 75, 75, true ); // default thumbnail size
        add_image_size('home-thumb-small', 240, 115, true); //custom size
        add_image_size('home-thumb-large', 520, 250, true); //custom size
        add_image_size('single-thumb', 815, 330, true); //custom size
    }
    /*
    if (function_exists('add_theme_support')) {
        add_theme_support( 'post-thumbnails' );        
        add_image_size('my-custom-thumb-small', 240, 115, true);
        add_image_size('my-custom-thumb-medium', 520, 250, true);
        add_image_size('my-custom-thumb-02', 815, 392, true);
    }*/

    function overwrite_recropped_thumbnail($resized_file) {
    // Remove timestamp added to re-cropped images. TODO improve regex to avoid
    // accidental path changes
    $new_path = preg_replace( '/-e([0-9]+)-/', '-', $resized_file, -1, $count );
    if($count>0) { // The file path had the timestamp, move back to original name
        rename($resized_file, $new_path);
        return $new_path;
    } else { // do nothing
        return $resized_file;
    }
}
add_filter('image_make_intermediate_size', 'overwrite_recropped_thumbnail',10);



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
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'prev_next' => False,
            'type' => 'list'
        ));
    }
}

/** END Pagination */

?>