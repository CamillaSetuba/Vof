<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title><?php bloginfo('name');?> <?php wp_title();?> </title>

    <!-- Bootstrap -->
    <!--css-->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>"/>
    <!-- google fonts-->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family-pt+sans:400italic,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php get_header();?>

    
  </head>
  <body>
  <!--header-->
  	 	 <div id="header" class="header">
                  <nav class="navbar navbar-default navbar-fixed-top">
  				
               
                <div class="container">

                  <div class= "row">
                  <div class="col-md-12" >
                    


                

                
                  

      </div>-->
			<body data-spy="scroll" data-target="#main-navbar">

        <!-- NavigationBar Section -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#header">
                    <img class="img-responsive " src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="logo">
                  </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
               <!-- <div class="collapse navbar-collapse" id="main-navbar" >
               <?php

                     if (is_active_sidebar('sidebar-1')){
                     dynamic_sidebar('sidebar-1');
                    }

                ?>-->
                  <ul class="nav navbar-nav navbar-right" ;>

                    <li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#fun">Quem Somos</a></li>
                    <li><a href="#practice">Atuação</a></li>
                    <li><a href="#testimonial">VOF</a></li>
                   <li><a href="#contact">Contato</a></li>
                   <!-- Menu customizado pelo wordpress-->
                   <li>
                   <?php
                      wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                      );
                    ?>
                  </li>
                   <!-- /Menu customizado pelo wordpress-->
                  </ul>

                  



                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                </nav>

  	    </div>
  	</div>
  </div>
  <!-- /header-->
