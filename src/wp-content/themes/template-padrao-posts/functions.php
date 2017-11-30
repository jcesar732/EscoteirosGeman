<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/**
 * 
 * @Frederic Chien
 * 28/10/2015
 * Thumbs Imagens
 * 
 * */
add_theme_support( 'post-thumbnails' );
add_image_size( '320x200', 320, 200, true ); 
add_image_size( '340x190', 340, 190, true );
add_image_size( '225x150', 225, 150, true );
add_image_size( '830x300', 830, 300, true );
add_image_size( '1200x300', 830, 300, true );

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Habilitar resumo
 *
 * */
add_action('init', 'my_custom_init');
function my_custom_init() {
	add_post_type_support( 'page', 'excerpt' );
}

/**
 * 
 * @Frederic Chien
 * 28/10/2015
 * Paginação
 * 
 * */
function wp_pagination($pages = '', $range = 9)
{
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	$pagination = array(
			'base' => @add_query_arg('page','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'show_all' => true,
			'type' => 'plain'
	);
	if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Breadcrum
 *
 * */
function wp_custom_breadcrumbs() {

	$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter = '&raquo;'; // delimiter between crumbs
	$home = 'Inicio'; // text for the 'Home' link
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$before = '<span class="current" itemprop="title">'; // tag before the current crumb
	$after = '</span>'; // tag after the current crumb

	global $post;
	$homeLink = get_bloginfo('url');

	if (is_home() || is_front_page()) {

		if ($showOnHome == 1) echo '<a href="' . $homeLink . '" itemprop="url">' . $home . '</a>';

	} else {

		echo '<a href="' . $homeLink . '" itemprop="url">' . $home . '</a> ' . $delimiter . ' ';

		if ( is_category() ) {
			$thisCat = get_category(get_query_var('cat'), false);
			if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
			echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;

		} elseif ( is_search() ) {
			echo $before . 'Search results for "' . get_search_query() . '"' . $after;

		} elseif ( is_day() ) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '" itemprop="url">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '" itemprop="url">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('d') . $after;

		} elseif ( is_month() ) {
			echo '<a href="' . get_year_link(get_the_time('Y')) . '" itemprop="url">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
			echo $before . get_the_time('F') . $after;

		} elseif ( is_year() ) {
			echo $before . get_the_time('Y') . $after;

		} elseif ( is_single() && !is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/" itemprop="url">' . $post_type->labels->singular_name . '</a>';
				if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
			} else {
				$cat = get_the_category(); $cat = $cat[0];
				$cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
				echo $cats;
				if ($showCurrent == 1) echo $before . get_the_title() . $after;
			}

		} elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;

		} elseif ( is_attachment() ) {
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); $cat = $cat[0];
			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
			echo '<a href="' . get_permalink($parent) . '" itemprop="url">' . $parent->post_title . '</a>';
			if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

		} elseif ( is_page() && !$post->post_parent ) {
			if ($showCurrent == 1) echo $before . get_the_title() . $after;

		} elseif ( is_page() && $post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '" itemprop="url">' . get_the_title($page->ID) . '</a>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				echo $breadcrumbs[$i];
				if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
			}
			if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

		} elseif ( is_tag() ) {
			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

		} elseif ( is_author() ) {
			global $author;
			$userdata = get_userdata($author);
			echo $before . 'Articles posted by ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . 'Error 404' . $after;
		}

		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
			echo __('Page') . ' ' . get_query_var('paged');
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}

		echo '';

	}
}


/**
 * 
 * @Frederic Chien
 * 28/10/2015
 * Estilizando footer admin
 * 
 * */
function wpmidia_change_footer_admin () {
	echo "<strong>Escoteiros do Brasil</strong>";
}

add_filter('admin_footer_text', 'wpmidia_change_footer_admin');


/**
 * 
 * @Frederic Chien
 * 28/10/2015
 * Aplicando css no login admin
 * 
 * */
add_action( 'login_head', 'wpmidia_custom_login' );
function wpmidia_custom_login() {
	echo '<link media="all" type="text/css" href="'.get_template_directory_uri().'/login-style.css" rel="stylesheet">';
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Ao clicar na logo, enviar para pagina inicial
 *
 * */
add_filter('login_headerurl', 'wpmidia_custom_wp_login_url');
function wpmidia_custom_wp_login_url() {
	return home_url();
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Adicionar alt
 *
 * */
add_filter('login_headertitle', 'wpmidia_custom_wp_login_title');
function wpmidia_custom_wp_login_title() {
	return get_option('blogname');
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Pegando a slug da pagina/post
 *
 * */
function the_slug($echo=true){
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
	do_action('after_slug', $slug);
	return $slug;
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Criando o menu da header
 *
 * */
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'menu_header', 'Este é menu header' );
}


/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Opçoes de tela desativada
 *
 * */
function wpmidia_remove_screen_options(){
	return false;
}
add_filter('screen_options_show_screen', 'wpmidia_remove_screen_options');

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Desativando o atualize
 *
 * */
add_filter(
		'pre_site_transient_update_core', create_function('$a',
			"return null;"
		) );

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Removendo metabox
 *
 * */
add_action('wp_dashboard_setup', 'wpmidia_remove_dashboard_widgets' );

function wpmidia_remove_dashboard_widgets() {
	global $wp_meta_boxes;

	// Remove o widget "Links de entrada" (Incomming links)
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// remove o widget "Plugins"
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['side']['core']['wpdm_dashboard_widget']);
	// remove o widget "Rascunhos recentes" (Recent drafts)
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	// remove o widget "QuickPress"
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	// remove o widget "Agora" (Right now)
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	// remove o widget "Blog do WordPress" (Primary)
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	// remove o widget "Outras notícias do WordPress" (Secondary)
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Adicionando Metabox
 *
 * */
add_action('wp_dashboard_setup', 'wpmidia_custom_dashboard_widgets');
function wpmidia_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Suporte', 'wpmidia_custom_dashboard_help');
}

function wpmidia_custom_dashboard_help() {
	echo 'Se você tiver qualquer dúvida ou precisar de ajuda, por favor, entre em contato. frederic.chien@escoteiros.org.br';
}

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Removendo itens do menu
 *
 * */
function remove_menus(){
	
	//remove_menu_page('edit.php'); //Posts
	remove_menu_page('edit-comments.php'); //Comments
	remove_menu_page('themepunch-google-fonts');
	remove_menu_page('edit.php?post_type=acf-field-group');
	//remove_menu_page('themes.php'); //Appearance
	//remove_menu_page('plugins.php'); //Plugins
	//remove_menu_page('users.php'); //Users
	//remove_menu_page('tools.php'); //Tools
	//remove_menu_page('options-general.php'); //Settings
}

add_action('admin_menu', 'remove_menus');

/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Registrando menu bootstrap
 *
 * */
require_once('wp_bootstrap_navwalker.php');


/**
 *
 * @Frederic Chien
 * 30/10/2015
 * Retirando opção de adicionar
 *
 * */
/* register_post_type( 'downloads', array(
		'capability_type' => 'downloads',
		'capabilities' => array(
		'create_posts' => true, // Removes support for the "Add New" function
		),
		'map_meta_cap' => true, // Set to false, if users are not allowed to edit/delete existing posts
)); */



/**
 *
 * @Frederic Chien
 * 13/03/2016
 * Adicioando itens no menu
 *
 * */
if( function_exists('acf_add_options_page') ) {

	$page = acf_add_options_page(array(
			'page_title' 	=> 'Gerenciamento de conteúdo',
			'menu_title' 	=> 'Gerenciamento de conteúdo',
			'menu_slug' 	=> 'gerenciamento-de-conteudo',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
	));
	$page = acf_add_options_page(array(
			'page_title' 	=> 'Banner',
			'menu_title' 	=> 'Banner',
			'parent_slug' 	=> 'gerenciamento-de-conteudo',
			'capability' 	=> 'edit_posts',
			'redirect' 	=> false
	));

}


/**
 *
 * @Frederic Chien
 * 06/04/2016
 * Registrando widget
 *
 * */
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
			'name' => __( 'Rodapé direito'),
			'id' => 'sidebar-1',
			'description' => __( 'Adicionar widget rodapé'),
			'before_title' => '<h2>',
			'after_title' => '</h2>',
	) );
	
	register_sidebar(array(
			'name' => __( 'Rodapé esquerdo'),
			'id' => 'sidebar-2',
			'description' => __( 'Adicionar widget rodapé'),
			'before_title' => '<h2>',
			'after_title' => '</h2>',
	) );
}


/**
 *
 * @Frederic Chien
 * 28/10/2015
 * Custom Posts Types
 *
 * */
include_once 'post-types/download.php';
include_once 'post-types/gerenciamento.php';
?>