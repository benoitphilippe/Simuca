<?php 
    // Répertoire racine du MVC
    $rootDirectory = dirname(__FILE__)."/../../../mvc/";

    // chargement de la classe Autoload pour autochargement des classes
    require_once($rootDirectory.'Config/Autoload.php');

    try {
        Autoload::load();
    } catch(Exception $e){
        require (Config::getVues()["default"]) ;
    }
?> 

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simuca</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="../../../css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Simuca</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li> 
                    <?php   
                        if(empty($_POST['mail'])) { echo" <li><a href='../../../index.php'>Back to Home</a></li>"; }
                        else { echo "<li><a>".$_POST['mail']."</a></li>"; }
                    ?> 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Connexion Section -->
    <section id="connexion" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <form class="form-signin" name="xxxxxxx" method="post">
                        <h2>Add a song: </h2>

                        <label for="idTitre">ID du titre:</label>
                        <input name="idTitre" id="idTitre" type="text" class="form-control" autofocus><br/>

                        <label for="nom">Nom du titre:</label>
                        <input name="nom" id="nom" type="text" class="form-control" autofocus><br/>

                        <label for="auteur">Nom de l'auteur:</label>
                        <input name="auteur" id="auteur" type="text" class="form-control" autofocus><br/>

                        <label for="genre">Genre:</label>
                        <input name="genre" id="genre" type="text" class="form-control" autofocus><br/>

                        <label for="album">Fichier pour cover:</label>
                        <input type="file" name="album" id="album"/><br/>

                        <label for="song">Chemin du fichier du titre :</label>
                        <input type="file" name="song" id="song"/><br/>

                        <label for="dateAjout">Date:</label>
                        <input name="dateAjout" id="dateAjout" type="date" class="form-control" autofocus><br/>

                        <button name="add" id="add" class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
                    </form>
                    </br>
                    <?php 
                        if (isset($_POST['idTitre']) && isset($_POST['nom']) && isset($_POST['auteur']) && isset($_POST['genre']) && isset($_POST['album']) && isset($_POST['song']) && isset($_POST['dateAjout']) ) {
                                $ctrl3 = new ControleurAdmin('putTitre');
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Created by Maxime Golfier- 2A | G1 - Projet PHP de Rémi Malgouyres </p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../../../vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../../js/grayscale.min.js"></script>

</body>

</html>
