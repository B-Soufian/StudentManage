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
    <?php include 'views/navbar/nav.php' ?>

    <div class="container p-4">
        <div class="card main-card shadow-sm">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                    <div class="input-group" style="max-width: 600px;">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Rechercher (Nom, Prénom)...">
                    </div>
                    <div class="mt-2 mt-md-0">
                        <button class="btn btn-outline-secondary me-2">
                            <i class="fas fa-filter me-1"></i> Filtres
                        </button>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus-circle me-1"></i> Nouvel étudiant
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Libelle</th>
                                <th scope="col">Coeff</th>
                                <th scope="col">Moyenne</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($tabMatiers as $Matiers): ?>
                            <tr>
                                <th scope="row"><?php echo htmlspecialchars($Matiers->CodeMat) ?></th>
                                <td><?php echo htmlspecialchars($Matiers->LibelleMat) ?></td>
                                <td><span class="badge badge-coeff" ><?php echo htmlspecialchars($Matiers->CoeffMat) ?></span></td>
                                <td><span class="badge bg-success"><?php echo htmlspecialchars($Matiers->MoyenneMatiere) ?></span></td>
                                <td>
                                    <button class="btn btn-outline-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-outline-secondary"><i class="fas fa-pencil-alt"></i></button>
                                    <button class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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