<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LABCET-Proyect</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!--Google Fonts link-->
    <link rel="stylesheet" href="css/googleapi.css">
    <link rel="stylesheet" href="css/googleapis.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/slick/slick.css">
    <link rel="stylesheet" href="css/slick/slick-theme.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="css/responsive.css" />

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" style="background-image: url(images/images.jpg);background-size: 100% 100%;background-attachment: fixed;">

    <div class="culmn">
        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg" style="background-color: rgba(0,0,0,0.7);">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">navegacion</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                            <img src="images/logo1.png"/>
                                        </a>
                                    </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="index.php">INICIO</a></li>
                                            <li><a href="about.php">ACERCA DE</a></li>
                                            <li><a href="signin.php">INICIAR SESION</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>  
                    </div>
                </div>
            </div>
        </header> <!--End of header -->
        <section id="feature" class="feature sections">
            <div class="container">
                <div class="row">
                    <div class="main_feature text-center">

                        <div class="col-sm-3" style="background-color: rgba(0,0,0,0.5);">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <img src="images/GAMES/ANGRY.png"></img>
                                </div>

                                <a href="game_angry.html"><h4>ANGRY BIRDS</h4></a>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                        <div class="col-sm-3" style="background-color: rgba(0,0,0,0.5);">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <img src="images/GAMES/frozen.jpeg"></img>
                                </div>

                                <a href="game_frozen.html"><h4>FROZEN</h4></a>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                        <div class="col-sm-3" style="background-color: rgba(0,0,0,0.5);">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <img src="images/GAMES/MINECRAFT.jpg" alt="">
                                </div>
                                <a href="game_minecraft.html"><h4>MINECRAFT</h4></a>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                        <div class="col-sm-3" style="background-color: rgba(0,0,0,0.5);">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-comments-o"></i>
                                </div>

                                <a href="#"><h4>paye support</h4></a>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End of container -->
        </section><!--End of feature Section -->

        <!--form Section -->
        <div class="container" style="width: 50%;background-color: rgba(10,0,0,0.5);border-radius: 20px;">
            <br><br>
            <h2>REGISTRATE AQUI</h2>
            <br><br>
            <form class="form-inline" action="procesos/signup.php" method="post">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Nombre</div>
                <input type="text" class="form-control" name="nombres" id="inlineFormInputGroup" placeholder="Lenin jose">
              </div>

              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Apellidos</div>
                <input type="text" class="form-control" name="apellido" id="inlineFormInputGroup" placeholder="Mamani Huaylla">
              </div>
                <br><br>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Usuario</div>
                <input type="text" class="form-control" name="usuario" id="inlineFormInputGroup" placeholder="paltos">
              </div>
              <br><br>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Correo...</div>
                <input type="email" class="form-control" name="correo" id="inlineFormInputGroup" placeholder="example@example.com">
              </div>
                <br><br>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Contraseña</div>
                <input type="password" class="form-control" name="pass" id="inlineFormInputGroup" placeholder="**********">
              </div>
              <br><br>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Confirmar contraseña</div>
                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="**********">
              </div>
                <br><br>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Institucion</div>
                <input type="text" class="form-control" name="institucion" id="inlineFormInputGroup" placeholder="I.E.S. Comercial 45">
              </div>
              <br><br>

              <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
            </form><br><br>
        </div>
        <br><br><br>

<?php
include("footer.html");
?>

    </div>

<!-- SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/tether.min.js"></script>

<script src="js/jquery.magnific-popup.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.masonry.min.js"></script>

<!--slick slide -->
<script src="css/slick/slick.js"></script>
<script src="css/slick/slick.min.js"></script>


<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>
