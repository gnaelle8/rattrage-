<?php

require_once "header2.php";

$absences = listAbsences();

?>


<div class="container">
    <h3>Liste des absences des étudiants</h3>
    <h4><a href="absences_etudiants_pdf.php" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o"></i> Compte rendu des absences</a></h4>
    <hr>
    <table class="table">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Matricule</th>
            <th>Module</th>
            <th>Date absence</th>
            <th>Justification</th>
            
            <?php if($_SESSION["type"] == "admin"): ?>
                <th><i class="fa fa-trash-o"></i> Suppr.</th>
            <?php endif; ?>
        </tr>
        <?php foreach($absences as $a): ?>
            <tr>
                <td><?=$a["nom"] ?></td>
                <td><?=$a["prenom"] ?></td>
                <td><?=$a["email"] ?></td>
                <td><?=$a["matricule"] ?></td>
                <td><?=$a["module"] ?></td>
                <td><?=$a["date_absence"] ?></td>
                <td><?=$a["type_absence"] ?></td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require_once "footer.php"?>
