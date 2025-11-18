<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body id="dashbord">
        <?php include 'views/navbar/nav.php' ?>


    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-1">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h5 class="card-title m-0 text-muted">Étudiants</h5>
                            <p class="card-text fs-4 fw-bold mb-0"><?php echo $studentCount  ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-1">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="fas fa-book"></i>
                        </div>
                        <div>
                            <h5 class="card-title m-0 text-muted">Matières</h5>
                            <p class="card-text fs-4 fw-bold mb-0"><?php echo $subjectCount  ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-1">
                    <div class="card-body d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <div>
                            <h5 class="card-title m-0 text-muted">Évaluations</h5>
                            <p class="card-text fs-4 fw-bold mb-0"><?php echo $evaluationCount  ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Top 5 Étudiants par moyenne</h5>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Etudiant</th>
                                        <th scope="col">Nb. matieres</th>
                                        <th scope="col">Moyenne</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($topStudents as $Student): ?>
                                    <tr>
                                        <th scope="row"><?php echo $Student->NEtudiant  ?></th>
                                        <td><?php echo $Student->Nom , ' ' , $Student->Prenom  ?></td>
                                        <td><?php echo $Student->NbMatieres?> </td>
                                        <td><span class="badge bg-success"><?php echo $Student->MoyenneGenerale ?></span></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted">Moyennes pondérées par CoeffMat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Top 5 Matières par moyenne</h5>
                        <div class="table-responsive">
                             <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Matière</th>
                                        <th scope="col">Coeff</th>
                                        <th scope="col">Moyenne</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($topSubjects as $Subject):?>
                                    <tr>
                                        <th scope="row"><?php echo $Subject->CodeMat?></th>
                                        <td><?php echo $Subject->LibelleMat?></td>
                                        <td><span class="badge badge-coeff"><?php echo $Subject->CoeffMat?></span></td>
                                        <td><span class="badge bg-success"><?php echo $Subject->MoyenneMatiere?></span></td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted">Moyenne simple des notes par matière.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>