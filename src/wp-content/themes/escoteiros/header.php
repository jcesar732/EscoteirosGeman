<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Escoteiros IFRN</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Google Fontes: PT Sans -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>

  </head>
  <body>




<div class="col-md-1 sigue"><a><p>&nbsp;<p></a></div>
<div class="col-md-11 sigue"><a href="http://sigue.escoteiros.org.br/sigue/"><p>Meu SIGUE (SIGUE Jovem)</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://sigue.escoteiros.org.br/sigue/">SIGUE Administrativo</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://sigue.escoteiros.org.br/sigue/">Webmail</p></a></div>
<div class="tudo">
<div class="col-md-4 logo"></div>
<div class="col-md-4 logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" class="img-responsive center-block" alt="Escoteiros IFRN" title="Escoteiros IFRN"></div>
<div class="col-md-4 logo"></div>


    <div class="header">
      <div class="container">
        <div class="row">
<div class="col-md-9">
          <nav class="navbar navbar-default">
            <div class="container-fluid" style="font-size: 14px;">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="#"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
             

              <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>


            </div><!-- /.container-fluid -->
          </nav>
</div>


<div class="col-md-3 navbar navbar-default" style="background: #444; border-color: #444; ">
          
<form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon glyphicon-user"></span></a></li>
                  <li class="dropdown">
                    
                  </li>
                </ul>
</nav></div>


<!-- Modal Cadastro/Login-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
              <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button><h4 class="modal-title" id="myModalLabel">Minha Conta<h4>
                   </div>  
          <div class="modal-body">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#logar" aria-controls="logar" role="tab" data-toggle="tab">Logar</a></li>
    <li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Cadastro</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="logar">

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <div class="checkbox">
    <label>
      <input type="checkbox">Lembre-se de mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Logar</button>
</form>

    </div>
    <div role="tabpanel" class="tab-pane" id="cadastro">Cadastre-se</div>
  </div>
          </div>
                   </div>  </div>  </div>

        </div>
      </div>
    </div>
<!--/header-->