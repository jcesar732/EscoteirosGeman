<?php 
// Custom taxonomy 'Categorias'.
add_action('init', 'categorias_portfolio_init', 0);
function categorias_portfolio_init() {
	$labels = array(
			'name' => _x('Categorias', 'taxonomy general name'),
			'singular_name' => _x('Categoria', 'taxonomy singular name'),
			'search_items' => __('Procurar categorias'),
			'all_items' => __('Todas as categorias'),
			'parent_item' => __('Categoria mãe'),
			'parent_item_colon' => __('Categoria mãe:'),
			'edit_item' => __('Editar categoria'),
			'update_item' => __('Atualizar categoria'),
			'add_new_item' => __('Adicionar nova categoria'),
			'new_item_name' => __('Nova categoria'),
			'menu_name' => __('Categorias'),
	);
	$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			
	);
	register_taxonomy('categorias', 'down', $args);
}


// Custom post type 'Download'.
add_action('init', 'download_init');
function download_init(){
	$labels = array(
			'name' => _x('Downloads', 'post type general name'),
			'singular_name' => _x('Downloads', 'post type singular name'),
			'add_new' => _x('Adicionar novo', 'Downloads'),
			'add_new_item' => __('Adicionar novo Downloads'),
			'edit_item' => __('Editar Downloads'),
			'new_item' => __('Novo Downloads'),
			'view_item' => __('Ver Downloads'),
			'search_items' => __('Buscar Downloads'),
			'not_found' =>  __('Nenhuma Downloads encontrada'),
			'not_found_in_trash' => __('Nenhum Downloads encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Downloads'
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-networking',
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','thumbnail')
	);
	register_post_type('down',$args);
}

/*
 * Adiciona a meta box para upload do arquivo
 */
add_action( 'add_meta_boxes', 'my_meta_box' );

function my_meta_box(){
	add_meta_box( 
		'my_meta_uploader', 
		'Upload de arquivo', 
		'my_meta_uploader_setup', 
		'down', 
		'normal', 
		'high' 
			);
}

/*
 * Adiciona os campos para a meta box de upload
 */
function my_meta_uploader_setup(){
	global $post;

	// Procura o valor da chave 'upload_file'
	$meta = get_post_meta( $post->ID, 'upload_file', true );
	?>

	<p>
		Clique no botão para fazer o upload de um documento. Após o término do upload, clique em <em>Inserir no post</em>.
	</p>

	<p>
		<input id="upload_file" type="text" size="80" name="upload_file" style="width: 85%;" value="<?php if( ! empty( $meta ) ) echo $meta; ?>" />
		<input id="upload_file_button" type="button" class="button" value="Fazer upload" />
	</p>

	<?php
}

/*
 * Salva os dados da nossa custom meta box
 */
add_action( 'save_post', 'my_meta_uploader_save' );

function my_meta_uploader_save( $post_id ) {

	if ( ! current_user_can( 'edit_post', $post_id ) ) return $post_id;

	// Recebe o valor que foi enviado pelo media uploader
	$arquivo = $_POST['upload_file'];

	// Adiciona a chave upload_file ou atualiza seu valor
	add_post_meta( $post_id, 'upload_file', $arquivo, true ) or update_post_meta( $post_id, 'upload_file', $arquivo );

	return $post_id;
}

/*
 * Adiciona o script que replica o uploader padrão do WordPress
 */
add_action( 'admin_head', 'my_meta_uploader_script' );

function my_meta_uploader_script() { ?>
	<script type="text/javascript">
		jQuery(document).ready(function() {

			var formfield;
			var header_clicked = false;

			jQuery( '#upload_file_button' ).click( function() {
				formfield = jQuery( '#upload_file' ).attr( 'name' );
				tb_show( '', 'media-upload.php?TB_iframe=true' );
				header_clicked = true;

				return false;
			});

			// Guarda o uploader original
			window.original_send_to_editor = window.send_to_editor;

			// Sobrescreve a função nativa e preenche o campo com a URL
			window.send_to_editor = function( html ) {
				if ( header_clicked ) {
					fileurl = jQuery( html ).attr( 'href' );
					jQuery( '#upload_file' ).val( fileurl );
					header_clicked = false;
					tb_remove();
				}
				else
				{
			  		window.original_send_to_editor( html );
			  	}
			}

		});
  </script>
<?php
}

?>