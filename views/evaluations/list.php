<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Scolarité - Étudiants</title>
    <link rel="stylesheet" href="/project/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .main-card {
            border: none;
            border-radius: 0.75rem;
        }

    </style>
</head>
<body>

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
        <div class="card main-card shadow-sm">
            <div class="card-body">
                <div class="row g-3 mb-4 align-items-end">
                    <div class="col-md-3">
                        <label for="" class="form-label">Étudiant</label>
                        <select id="" class="form-select">
                            <option selected>Tous</option>
                            <option>Sara ALAOUI</option>
                            <option>Yassine BENNANI</option>
                            <option>Nadia CHERKAOUI</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Matière</label>
                        <select id="" class="form-select">
                            <option selected>Toutes</option>
                            <option>Laravel</option>
                            <option>Algèbre</option>
                            <option>BD Avancées</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Du</label>
                        <div class="input-group">
                             <input type="text" id="" class="form-control" value="01/10/2025">
                             <span class="input-group-text bg-white"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="dateTo" class="form-label">Au</label>
                         <div class="input-group">
                            <input type="text" id="dateTo" class="form-control" value="31/10/2025">
                            <span class="input-group-text bg-white"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                    </div>
                
                    <div>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus-circle me-1"></i> Nouvelle évaluation
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Etudiant</th>
                                <th scope="col">Matiere</th>
                                <th scope="col">Coeff</th>
                                <th scope="col">Note/20</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">05/10/2025</th>
                                <td>Sara Alaoui</td>
                                <td>Laravel</td>
                                <td> <span class="badge badge-coeff">3</span></td>
                                <td><span class="badge bg-success">16.8</span></td>
                                <td>
                                    <button class="btn btn-outline-secondary"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="text-muted">3 sur 10</span>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                            <a class="page-link" href="#" aria-current="page">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>