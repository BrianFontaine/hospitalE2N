<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
    <link rel="manifest" href="../assets/img/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Liste des patients</title>
</head>

<body>
    <nav class="navbar justify-content-around">
        <a href="../index.php" class="nav-link  "><img src="https://fotomelia.com/wp-content/uploads/edd/2015/03/logo-hospital-1560x631.png" alt=""></a>
        <a href="create_patients_ctrl.php" class="nav-link ">Ajouter un patient</a>
        <a href="liste_patients_ctrl.php" class="nav-link ">Liste Patients</a>
        <a href="create_appointment_ctrl.php" class="nav-link ">Ajouter un rendez-vous</a>
        <a href="list_appointment_ctrl.php" class="nav-link">Liste des rendez-vous</a>
    </nav>
    <div id="patients">
    <div class="container row m-auto" >
    <?php if (count($listPatients) > 0) { 
        foreach ($listPatients as $number => $patient) { ?>
    <div class="card mt-4 ml-4" style="width: 18rem;background-color: rgba(74, 122, 233, 0.6) !important;">
        <img class="card-img-top" src="https://www.petitesaffiches.fr/annuaire/images/avocats_default_avatar.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Patient numéro : <?= $number + 1; ?></h5>
            <p class="card-text">Prénom : <?= $patient->firstname; ?></p>
            <p class="card-text">Nom : <?= $patient->lastname; ?></p>
            <p class="card-text">Date de Naissance : <?= $patient->birthdate_format; ?></p>
            <a class="btn btn-primary col-12 mb-2" href="patients_profil_ctrl.php?id=<?= $patient->id; ?>">Voir le profil</a>
            <a class="btn btn-danger col-12 mb-2" href="delete_patients_ctrl.php?id=<?= $patient->id; ?>">Supprimer le patients</a>

        </div>
    </div>
    
        <?php } ?>
    <?php } else { ?>
        <h1 class="text-center">Aucun patients n'as été trouver 
            <a href="create_patients_ctrl.php">
                Veuillez ajouter un patients
            </a>
        </h1>
    <?php } ?>
    </div>
    </div>


</body>

</html>