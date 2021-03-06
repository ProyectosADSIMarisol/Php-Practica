<?php
require_once "crudPosts.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar - Usuario</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marisol Daza</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marisol Daza</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marisol Daza</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Marisol Daza <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

             <?php include_once "menu.php"; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar Post
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Post</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Editar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php if(empty($_GET['id'])){ ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> No se encontro un Post al que aplicar esta accion.
                    </div>
                <?php }else{ ?>

                <?php
                    $_SESSION['idPosts'] = $_GET['id'];
                    $arrUser = getUser($_SESSION['idPosts']);
                ?>
                <div class="row">
                    <div class="col-lg-8">


                        <form role="form" id="frmUser" method="post" action="crudPosts.php?action=update">
                            <div class="form-group">
                               

                                <label>Utc</label>
                                <input id="Utc" name="Utc" class="form-control" value="<?php echo $arrUser['Utc']; ?>" placeholder="Utc">
                                <p class="help-block">Utc.</p>
                            </div>

                            <div class="form-group">
                                <label>Anio</label>
                                <input id="Anio" name="Anio" class="form-control" value="<?php echo $arrUser['Anio']; ?>" placeholder="Anio">
                                <p class="help-block">Anio.</p>
                            </div>

                            <div class="form-group">
                                <label>Mes</label>
                                <input id="Mes" name="Mes" class="form-control" value="<?php echo $arrUser['Mes']; ?>" placeholder="Mes">
                                <p class="help-block">Mes.</p>
                            </div>

                            <div class="form-group">
                                <label>Dia</label>
                                <input id="Dia" name="Dia" class="form-control" value="<?php echo $arrUser['Dia']; ?>" placeholder="Dia">
                                <p class="help-block">Dia.</p>
                            </div>

<div class="form-group">
                            


                            <div class="form-group">
                                <label>Hora</label>
                                <input id="Hora" name="Hora" class="form-control" value="<?php echo $arrUser['Hora']; ?>" placeholder="Hora">
                                <p class="help-block">Hora.</p>
                            </div>



                            
                                


                            <div class="form-group">
                                <label>Segundo</label>
                                <input id="Segundo" name="Segundo" class="form-control" value="<?php echo $arrUser['Segundo']; ?>" placeholder="Segundo">
                                <p class="help-block">Segundo.</p>
                            </div>

                             <div class="form-group">
                                <label>Titulo</label>
                                <input id="Titulo" name="Titulo" class="form-control" value="<?php echo $arrUser['Titulo']; ?>" placeholder="Titulo">
                                <p class="help-block">Titulo.</p>
                            </div>


                             <div class="form-group">
                                <label>SubTitulo</label>
                                <input id="SubTitulo" name="SubTitulo" class="form-control" value="<?php echo $arrUser['SubTitulo']; ?>" placeholder="SubTitulo">
                                <p class="help-block">SubTitulo.</p>
                            </div>


                             <div class="form-group">
                                <label>Icono</label>
                                <input id="Icono" name="Icono" class="form-control" value="<?php echo $arrUser['Icono']; ?>" placeholder="Icono">
                                <p class="help-block">Icono.</p>
                            </div>


                             <div class="form-group">
                                <label>Texto</label>
                                <input id="Texto" name="Texto" class="form-control" value="<?php echo $arrUser['Texto']; ?>" placeholder="Texto">
                                <p class="help-block">Texto.</p>
                            </div>
                             <div class="form-group">
                                <label>Imagen</label>
                                <input id="Imagen" name="Imagen" class="form-control" value="<?php echo $arrUser['Imagen']; ?>" placeholder="Imagen">
                                <p class="help-block">Imagen.</p>
                            </div>

                            <div class="form-group">
                                <label>Video</label>
                                <input id="Video" name="Video" class="form-control" value="<?php echo $arrUser['Video']; ?>" placeholder="Video">
                                <p class="help-block">Video.</p>
                            </div>


                            <div class="form-group">
                                <label>Sonido</label>
                                <input id="Sonido" name="Sonido" class="form-control" value="<?php echo $arrUser['Sonido']; ?>" placeholder="Sonido">
                                <p class="help-block">Sonido.</p>
                            </div>


                            <button type="submit" class="btn btn-default">Enviar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>

                        </form>

                    </div>

                </div>

                <?php } ?>


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
