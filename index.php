<!DOCTYPE html>
<html>
    <head>
        <title>Eduardo Rocha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- para nao dar zoom -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/responsivo.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!-- BOOTSTRAP-->
        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/demo.css">
        <link rel="stylesheet" type="text/css" href="css/component.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

    </head>
    <body class="home-page">
        <div id="container">
            <div class="menu-descktop"> 
                <div class="header">
                    <div class="logo">
                        <a href="index.php">
                            <img class="imglogo" src="images/logo.png">
                        </a>
                    </div>
                </div>
                <section class="color-1 topomenu">
                    <nav class="menu cl-effect-1">
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
                            <span class="sr-only">Damiana Cruz - Fotografias</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-responsivo" href="#"><img src="images/logo.png"></a>
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
