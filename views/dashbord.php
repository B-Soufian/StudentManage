<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body id="dashbord">

    <nav class="navbar navbar-expand-lg bg-primary text-light shadow-sm">
        <div class="container-fluid px-5">
            <a class="navbar-brand fw-bold fs-5 text-light" href="#">
                <i class="fas fa-graduation-cap me-2"></i>Gestion Scolarité
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#"><i class="fas fa-th-large me-1"></i>Tableau de bord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../etudiants/list.php"><i class="fas fa-users me-1"></i>Etudiants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../matieres/list.php"><i class="fas fa-book me-1"></i>Matieres</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="../evaluations/list.php"><i class="fas fa-check-square me-1"></i>Evaluations</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                            <p class="card-text fs-4 fw-bold mb-0">128</p>
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
                            <p class="card-text fs-4 fw-bold mb-0">18</p>
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
                            <p class="card-text fs-4 fw-bold mb-0">18</p>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Sara ALAOUI</td>
                                        <td>6</td>
                                        <td><span class="badge bg-success">16.8</span></td>
                                    </tr>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Laravel</td>
                                        <td><span class="badge badge-coeff">4</span></td>
                                        <td><span class="badge bg-success">15.9</span></td>
                                    </tr>
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