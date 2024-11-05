<?php

session_start();
require "./files/database.php";
require "./files/functions.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>Gestion Absence</title>
<link rel="stylesheet" href="./css/bootstrap.min.css" >
<link rel="stylesheet" href="./css/font-awesome.min.css" >
<link rel="stylesheet"  href="./css/styles.css" >
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Acceuil2.php">Gestion Absence</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="Acceuil2.php"><i>Accueil</i></a></li>
            <?php if(isset($_SESSION["login"]) && $_SESSION["type"] == "admin" ): ?>
                <li><a href="Acceuil2.php"> <i class="fa fa-dashboard"></i> <b><i>ADMIN</i></b></a></li>
            <?php elseif(isset($_SESSION["type"]) && $_SESSION["type"] == "etudiant" ): ?
                <li><a href="etudiant.php?id=<?=$_SESSION['id_etudiant'] ?>"> <i class="fa fa-dashboard"></i>Liste de Mes absences</a></li>
            <?php elseif(isset($_SESSION["type"]) && $_SESSION["type"] == "professeur" ): ?>
                <li><a href="Acceuil2.php"> <i class="fa fa-dashboard"></i> <b><?=$_SESSION["nom"] ?></b></a></li>
            <?php endif; ?>
            <?php if(isset($_SESSION["id"])): ?>
                <li><a href="disconnect2.php"><i class="fa fa-sign-out"></i> <b>deconnexion</b></a></li>
 <?php endif ?>
           
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<?php if(isset($_SESSION["message"])): ?>
<div class="container">
    <div class="row">
        <div class="alert alert-info" >
            <?php echo $_SESSION["message"] ?>
        </div>
    </div>
</div>
<?php endif ?>
