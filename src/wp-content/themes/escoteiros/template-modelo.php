<? php
	/** 
	*	Template Name: Primeiro Modelo
	*
	**/
>

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

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Navigation -->
    <aside id="accordion" class="social text-vertical-center">
      <div class="accordion-social">
        <ul class="panel-collapse" role="tabpanel" aria-labelledby="social-collapse" id="collapseOne">
          <li><a href="https://www.facebook.com/IFRNoficial" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/ifrnoficial/?hl=pt-br" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li></i></a></li>
          <li><a href="https://twitter.com/ifrn_" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
          <li><a href="https://plus.google.com/110261631315671379715" target="_blank"><i class="fa fa-lg fa-google-plus"></i></a></li>
        </ul>
      </div>
    </aside>


<div class="col-md-1 sigue"><a><p>&nbsp;<p></a></div>
<div class="col-md-11 sigue"><a href="http://sigue.escoteiros.org.br/sigue/"><p>Meu SIGUE (SIGUE Jovem)</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://sigue.escoteiros.org.br/sigue/">SIGUE Administrativo</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://sigue.escoteiros.org.br/sigue/">Webmail</p></a></div>
<div class="tudo">
<div class="col-md-4 logo"></div>
<div class="col-md-4 logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/un.png" class="img-responsive" alt="Escoteiros IFRN" title="Escoteiros IFRN"></div>
<div class="col-md-4 logo"></div>


    <div class="header">
      <div class="container">
        <div class="row">
<div class="col-md-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
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
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/wordpress/">Início<span class="sr-only">(current)</span></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">O GEMAN<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Eventos</a></li>
                  <li><a href="#">Ramos</a></li>
                  <li><a href="#">Fotos</a></li>
                  <li><a href="#">Downloads</a></li>
                  <li><a href="#">Quer ser escoteiro?</a></li>
                  <li><a href="#">Contato</a></li>
                </ul>
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
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
</div>

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


  
<!-- Noticias-->
<div class="width-full-box">
<div class="container">
<div class="row">
<div class="title-box"><h4>Notícias</h4></div></div>
          <div class="row">

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnc.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Lançamento da Insígnia Mares Limpos</a></h1>
            </div>

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifna.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Especialidade criada por Escoteira é aprovada pela Direção Nacional</a></h1>
            </div>

             <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnb.jpg"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Escoteiros realizam curso no Museu Aeroespacial</a></h1>
            </div>

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnc.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Lançamento da Insígnia Mares Limpos</a></h1>
            </div>

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifna.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Especialidade criada por Escoteira é aprovada pela Direção Nacional</a></h1>
            </div>

             <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnb.jpg"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Escoteiros realizam curso no Museu Aeroespacial</a></h1>
            </div>

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnc.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Lançamento da Insígnia Mares Limpos</a></h1>
            </div>

            <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifna.png"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Especialidade criada por Escoteira é aprovada pela Direção Nacional</a></h1>
            </div>

             <div class="col-md-4 iten-noticias">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ifnb.jpg"
              class="img-responsive img-thumbnail"
              alt="" title="" /></a><span>
              Data: 28/08/2017</span>
              <h1><a href="#">Escoteiros realizam curso no Museu Aeroespacial</a></h1>
            </div>


          </div>    </div>    </div>
<!-- /Noticias-->  <!-- /Noticias-->  <!-- /Noticias-->

<!-- Rodapé -->   <!-- Rodapé -->   <!-- Rodapé --> 
<div class="width-full-box2">
<div class="container">
<div class="row"> </div>
          <div class="row">

            <div class="col-md-4 iten-rodape">
              <a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/escotfim2.png" class="img-responsive" alt="Escoteiros IFRN" title="Escoteiros IFRN" style="width: 250px"></a>
            </div>

            <div class="col-md-4 iten-rodape">
              <a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/escot.png" class="img-responsive" alt="Escoteiros IFRN" title="Escoteiros IFRN" style="margin-top: 30px"</a>
           </div>

             <div class="col-md-4 iten-rodape">
              <h1><a href="#">Contato</a></h1>
              <h4>Escoteiros do Instittuto Federal de Ciênicas e Tecnologias do Rio Grande do Norte; <br> Avenida Senador Salgado Filho, 1559,<br> Tirol, Natal - RN, CEP: 59015-000, 
              <br>Telefone: (84) 4005-9800</h4>
            </div>

          </div>    </div>    </div>    </div>
<!-- /Rodapé --><!-- /Rodapé --><!-- /Rodapé -->


    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
  </body>
</html>