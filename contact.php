<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Juliana Carolina | Diseño Web</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="img/fav.ico" type="image/x-icon">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- fonts css -->
    <link rel="stylesheet" href="css/font-awesome.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html">Juliana Carolina</a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box-header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">

                <li><a class="lang" key="home" href="/">Home</a>
                <li><a class="lang" key="about" href="about">Sobre mi</a></li>
                <li><a class="lang" key="services" href="services">Servicios</a></li>
                <li><a class="lang" key="portfolio" href="portfolio">Portfolio</a></li>
                <li><a class="lang" key="blog" href="blog">Blog</a></li>
                <li><a class="lang" key="contact" href="contact.php">Contacto</a></li>
                <li class="box-label lang" key="follow">¡Seguime!</li>

                <li class="box-social"><a href="https://www.facebook.com/julianacarolinadw/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                <li id="icon" class="box-social"><a href="https://github.com/julziten/" target="_blank">
                    <i class="fab fa-github"></i>
                </a></li>
                <li class="box-social"><a href="https://www.linkedin.com/company/juliana-carolina---web-design?trk=ppro_cprof" target="_blank"><i class="ion-social-linkedin"></i></a></li>

                <div>
                    <button class="translate lang btn btn-box btn-lang" id="en" key="english">English</button>
                    <button class="translate lang btn btn-box btn-lang" id="es" key="spanish">Español</button>
                </div>
            </ul>
        </nav>
        <!-- end nav -->

    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1 class="lang" key="contact">Contacto</h1>
        <p><a href="#">Home</a> / <span class="lang" key="contact">Contacto</span></p>
    </div>
    <!-- end top bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" id="nombre">
                            <span class="lang" key="contact-name">tu nombre</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="mail" name="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>" id="correo">
                            <span class="lang" key="contact-email">tu email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="object">
                            <span class="lang" key="contact-subject">asunto</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="mensaje" id="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
                            <span class="lang" key="contact-message">mensaje</span>
                        </div>
                    </div>


                    <?php if (!empty($errores)): ?>
                    <div class="alert error">
                    <?php echo $errores; ?>
                    </div>
                    <?php elseif($enviado): ?>
                    <div class="alert success">
                    <p>¡Perfecto! A la brevedad te estaré contactando</p>
                    </div>
                    <?php endif ?>


                    <div class="col-md-12">
                        <input type="submit" name="submit" value="enviar" class="btn btn-box lang" id="testing"></input>
                    </div>
                </div>
            </form>
        </div>
        </form>


        <div class="col-md-6">
            <h3 class="text-uppercase lang" key="contact1">¡CONTACTATE!</h3>
            <h5 class="lang" key="contact2">Me encantaría saber de ti!</h5>
            <div class="h-30"></div>
            <p class="lang" key="contact3">Cualquier consulta o duda que tengas no dudes en contactarme. Si tenes una idea en mente, querés renovar tu sitio, o iniciarte en el mundo digital.
                Hay un presupuesto acorde a cada necesidad. </p>
            <div class="contact-info">
                <p><i class="ion-android-call "></i> 5411 2582 5626</p>
                <p><i class="ion-ios-email"></i> contacto@julianacarolina.com</p>
            </div>
        </div>


    </div>
    <!-- end main-container -->

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">Made with <i class="far fa-heart"></i> | Copyright &copy; Juliana Rocha 2019</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>