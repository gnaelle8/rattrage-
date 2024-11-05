<?php

require_once "header2.php";

$etudiant = getEtudiant($_GET["id"]);
$modules = listModules();

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Etudiant : <?= $etudiant["nom"] ?> <?= $etudiant["prenom"] ?></h3></div>
                <div class="panel-body">
                    <h4>Matricule : <?=$etudiant["matricule"] ?></h4>
                    <h4>EMAIL : <a target="_blank" href="mailto:<?=$etudiant["email"] ?>"  ><?=$etudiant["email"] ?></a></h4>
                    <h4>Téléphone : <?=$etudiant["telephone"] ?></h4>
                    <hr>
                    <form action="marquer_absence.php" method="POST">
                        <input type="hidden" name="id" value="<?=$etudiant["id"]; ?>" >
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Module</label>
                                    <select class="form-control" name="module" id="">
                                        <?php foreach ($modules as $m): ?>
                                            <option value="<?= $m["nom_module"] ?>"><?= $m["nom_module"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Date absence</label>
                                    <input type="date" name="date_absence" class="form-control" placeholder="Date absence" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Créneau horaire</label>
                                    <select name="crn_horaire" id="" class="form-control">
                                        <option value="8-10">8h30-12h30</option>
                                        <option value="10-12">13h30-17h30</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Type d'absence</label>
                                    <select class="form-control" name="type_absence" id="">
                                        <option value="Absence justifiée" selected >Absence justifiée</option>
                                        <option value="Absence non-justifiée">Absence non-justifiée</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning" name="marquer-absence" >Marquer l'absence</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>
