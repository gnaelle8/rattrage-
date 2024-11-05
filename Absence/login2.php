< <?php require_once "header2.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style de base de la page */
        body {
            background-color: #f5f7fa;
            font-family: Arial, sans-serif;
        }
        
        /* Centrage de la boîte de connexion */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style de la boîte de connexion */
        .login-box {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-box h3 {
            text-align: center;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-group label {
            color: #555;
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary, .btn-success {
            width: 100%;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Style du bouton Se connecter */
        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        /* Style du bouton Exit */
        .btn-primary {
            background-color: #007bff;
            border: none;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-box">
        <form action="login.php" method="POST" autocomplete="off">
            <h3><i class="fa fa-user-circle-o"></i> Connexion</h3>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
            </div>
            <button type="submit" name="connexion" class="btn btn-success btn-lg">Se connecter</button>
            <a href="Acceuil2.php" class="btn btn-primary btn-lg">Exit</a>
        </form>
    </div>
</div>

<?php require_once "footer.php" ?>
</body>
</html>