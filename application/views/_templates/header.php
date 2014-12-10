<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoptame - Playa del Carmen</title>
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/magnific-popup.css" rel="stylesheet"> 
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" /><![endif]-->
    </head>
    <body class="homepage">
        <!-- Navigation -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Handler de Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="<?php echo URL; ?>index/index"><strong>Adopta.</strong>me<br />
                    </a></h1>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                        <a href="<?php echo URL; ?>index/index"><span data-hover="Inicio">Inicio</span></a>
                        </li>
                         <?php if (Session::get('user_logged_in') == true): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Adopta">Adopta</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo URL; ?>informacion/index">Antes de Adoptar</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL; ?>informacion/why">¿Porque Adoptar?</a>
                                </li>
                                <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                                    <a href="<?php echo URL; ?>adoptar/index">Adoptame</a>
                                </li>
                                <li  <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?>>
                                    <a href="<?php echo URL; ?>adopcion/index">Dar en Adopción</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo URL; ?>informacion/about"><span data-hover="¿Quienes Somos?">¿Quienes Somos?</span></a>
                        </li>
                        <li>
                            <a href="#"><span data-hover="Eventos">Eventos</span></a>
                        </li>
                        <li>
                            <a href="#"><span data-hover="Contacto">Contacto</span></a>
                        </li>
                        <?php if (Session::get('user_logged_in') == true):?>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo URL; ?>login/showprofile" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Mi cuenta">Mi Cuenta</span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/uploadavatar">Cambiar Imagen</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/editusername">Editar Uusuario</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/edituseremail">Editar Email</a>
                        </li>
                        <li <?php if ($this->checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo URL; ?>login/logout">Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
                        <?php if (Session::get('user_logged_in') == false):?>
                        <li class="purchase-btn" <?php if ($this->checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?>>
                            <form method="get" action="<?php echo URL; ?>login/index">
                                <button type="submit" class="btn btn-default"><span data-hover="Ingresa">Ingresa</span></button>
                            </form>    
                        </li>
                        <?php endif; ?>
                        <li>
                         <?php if (Session::get('user_logged_in') == true): ?>
                            <div class="header_right_box">
                                <div class="active">
                                <h6>¡Hola! <?php echo Session::get('user_name'); ?> !</h6>
                                </div>
                                <div class="avatar">
                                    <?php if (USE_GRAVATAR) { ?>
                                        <img src='<?php echo Session::get('user_gravatar_image_url'); ?>' style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
                                    <?php } else { ?>
                                        <img src='<?php echo Session::get('user_avatar_file'); ?>' style='width:<?php echo AVATAR_SIZE; ?>px; height:<?php echo AVATAR_SIZE; ?>px;' />
                                    <?php } ?>
                                </div>
                            </div>
                            <?php endif; ?>      
                        </li>   
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation end -->