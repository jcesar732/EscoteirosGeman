<!doctype html>
<html class="no-js" lang="pt-br" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	
    <meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="distribution" content="global" />
	<meta name="rating" content="general" />
	<meta name="robots" content="ALL" />
	<meta name="robots" content="index,follow"/>
	<meta name="language" content="pt-br" />
	<meta name="doc-rights" content="Public" />
	<meta name="classification" content="Servicos" />
	<meta http-equiv="Content-Language" content="pt-br" />
	      
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.ico" />
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.ico" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.png" />
	<link rel="canonical" href="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
	<?php wp_head(); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
		<div class="row topo hidden-xs hidden-sm">
			<div class="container">
				<div class="col-lg-12">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="http://sigue.escoteiros.org.br/siguejovem/" target="_blank">Meu SIGUE (SIGUE Jovem)</a><span> | </span>
						<a href="http://sigue.escoteiros.org.br/sigue/" target="_blank">SIGUE Administrativo</a><span> | </span>
						<a href="https://login.microsoftonline.com/?mkt=pt-BR" target="_blank">Webmail</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row topo-meio">
			<div class="container">
				<div class="col-lg-12">
					<div class="bloco-logo col-lg-4 col-lg-offset-4">
						<?php 
							if ( get_field('logo_home', 'option') != '' ):?>
								<img src="<?php the_field('logo_home', 'option'); ?>" class="imgcenter">
							<?php else:?>
								<img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" class="imgcenter">
							<?php endif;?>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row">
    		<div class="menu-top">
	    		<div class="container">
	    			<div class="col-lg-12 col-lg-offset-1">
	     				<nav class="navbar navbar-default" style="right: 9%">
	 						<!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-top">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						    </div>
	 						<div class="collapse navbar-collapse" id="menu-top">
	 							<ul class="nav navbar-nav">
                  <li><a href="<?php bloginfo('home'); ?>">Início<span></span></a></li>
                  <li class="dropdown">
                    <a href="<?php bloginfo('home'); ?>/wordpress/o-geman/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O GEMAN<span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
  <li id="menu-item"><a title="O início" href="<?php bloginfo('home'); ?>">O início</a></li>
  <li id="menu-item"><a title="Institucional" href="<?php bloginfo('home'); ?>">Institucional</a></li>
  <li id="menu-item"><a title="Galeria de Honra" href="<?php bloginfo('home'); ?>">Galeria de Honra</a></li></ul>
                  </li>
                  <li class="dropdown">
                    <a href="<?php bloginfo('home'); ?>/wordpress/noticias/">Notícias</a></li>
                  <li><a href="<?php bloginfo('home'); ?>/wordpress/eventos/">Eventos</a></li>
<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ramos<span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
  <li id="menu-item"><a title="Ramo Lobinho" href="<?php bloginfo('home'); ?>/wordpress/ramo-lobinho/">Ramo Lobinho</a></li>
  <li id="menu-item"><a title="Ramo Escoteiro" href="<?php bloginfo('home'); ?>/wordpress/ramo-lobinho/">Ramo Escoteiro</a></li>
  <li id="menu-item"><a title="Ramo Sênior" href="<?php bloginfo('home'); ?>/wordpress/ramo-lobinho/">Ramo Sênior</a></li>
  <li id="menu-item"><a title="Ramo Pioneiro" href="<?php bloginfo('home'); ?>/wordpress/ramo-lobinho/">Ramo Pioneiro</a></li>
						</ul>
                  </li>
                  </li>
                  <li><a href="<?php bloginfo('home'); ?>/wordpress/fotos/">Fotos</a></li>
                  <li><a href="<?php bloginfo('home'); ?>/wordpress/downloads/">Downloads</a></li>
                  <li><a href="<?php bloginfo('home'); ?>/wordpress/ser-escoteiro/">Quer ser escoteiro?</a></li>
                  <li><a href="<?php bloginfo('home'); ?>/wordpress/contato/">Contato</a></li>
                </ul>
                
								<?php get_search_form();?>			
							</div>	
						</nav>
	     			</div>
	    		</div>
    		</div>
    	</div>
	</header>    


	