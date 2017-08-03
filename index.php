<!DOCTYPE html>
<html>
    <head>
        <title>Eduardo Rocha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- para nao dar zoom -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/responsivo.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!-- BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="css/animate.css"> <!-- BOOTSTRAP-->
        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/demo.css">
        <link rel="stylesheet" type="text/css" href="css/component.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/component1.css">
        <link rel="stylesheet" type="text/css" href="css/default1.css">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/modernizr.custom1.js"></script>
        <script type="text/javascript" src="js/toucheffects.js"></script>
        <script type="text/javascript" src="js/portifolio.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <script>
            new WOW().init();

            function mostraMenu() {
                $("nav").toggle();
            }
        </script>

    </head>
    <body class="home-page">
        <div class="container">
            <div class="menu-descktop"> 
                <div class="header">
                    <div class="logo wow fadeInLeft">
                        <a href="index.php">
                            <img class="imglogo" src="images/logo.png">
                        </a>
                    </div>
                </div>
                <section class="color-1 topomenu">
                    <nav class="menu cl-effect-1 wow fadeInRight">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="index.php">QUEM SOMOS</a></li>
                            <li><a href="index.php">FOTOS</a></li>
                            <li><a href="index.php">JOGOS</a></li>
                            <li><a href="index.php">CONTATO</a></li>
                        </ul>
                    </nav>
                </section>
            </div>
        </div>
        <!-- menu do boostrap -->
        <div class="menu-boostrap-responsivo">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Eduardo Rocha</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-responsivo wow fadeInDown" href="#"><img src="images/logo.png"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse iconefonte" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
                            <li><a href="?pg=orcamento"><i class="fa fa-credit-card" aria-hidden="true"></i>SOLICITE ORÇAMENTO</a></li>
                            <li><a href="?pg=sobrenos"><i class="fa fa-users" aria-hidden="true"></i>SOBRE NÓS</a></li>
                            <li><a href="?pg=buscadefotos"><i class="fa fa-search" aria-hidden="true"></i>BUSCAR FOTOS</a></li>
                            <li><a href="?pg=contato"><i class="fa fa-envelope-o" aria-hidden="true"></i>CONTATO</a></li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
    </div>

    <main>
        <?php
        //print_r( $_GET );

        if (isset($_GET["p"])) {
            //se o parametro p existe
            $p = trim($_GET["p"]);

            //separar por / produto/111
            //pagina - produto
            //codigo - 111
            $p = explode("/", $p);

            //print_r ( $p );
            $pagina = $p[0]; //nome da página
        } else {

            $pagina = "home";
        }

        $pagina = "pages/$pagina.php";

        if (file_exists($pagina))
            include $pagina;
        else
            include "pages/erro.php";
        ?>
    </main>
    <!-- RODAPE -->
    <footer>

    </footer>

</body>
</html>
