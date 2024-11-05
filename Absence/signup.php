<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container { margin-top: 50px; }
        .form-group { margin-bottom: 1rem; }
        .student-fields, .professor-fields { display: none; }
        .password-strength { font-size: 0.9rem; color: grey; }
        .btn { margin-top: 1rem; }
    </style>
</head>
<body>

<div class="container">
    <h3 class="text-center">Inscription</h3>
    <form id="signupForm" action="signup.php" method="POST" autocomplete="off">
        <div class="form-group">
            <label>Type de Compte</label>
            <select name="type" id="accountType" class="form-control">
                <option value="">Sélectionner</option>
                <option value="etudiant">Étudiant</option>
                <option value="professeur">Professeur</option>
            </select>
        </div>



        <!-- Champs pour Professeur -->
        <div class="professor-fields">
            <div class="form-group">
                <label>Matricule</label>
                <input type="number" name="som" class="form-control" placeholder="MATRICULE">
            </div>
        </div>

        <!-- Champs communs -->
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label>Mot de Passe</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
            <small class="password-strength" id="passwordStrength">Complexité : Faible</small>
        </div>
        <button type="submit" class="btn btn-success">S'inscrire</button>
    </form>
</div>

<script>
    // Changer les champs affichés selon le type sélectionné
    document.getElementById('accountType').addEventListener('change', function () {
        const type = this.value;
        document.querySelector('.student-fields').style.display = type === 'etudiant' ? 'block' : 'none';
        document.querySelector('.professor-fields').style.display = type === 'prof