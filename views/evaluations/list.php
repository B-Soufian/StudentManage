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
                <div class="row g-3 mb-4 align-items-end">
                    <div class="col-md-3">
                        <label for="" class="form-label">Étudiant</label>
                        <select iid="etudient" name="etudient" class="form-select">
                            <option selected>Toutes</option>
                            <?php foreach ($tabEtudiants as $Etudiant ): ?>
                                <option value="<?php echo $Etudiant->NEtudiant ?>">
                                    <?php echo $Etudiant->Nom ,' ' , $Etudiant->Prenom ?>
                                </option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Matière</label>
                        <select id="matier" name="matier" class="form-select">
                            <option selected>Toutes</option>
                            <?php foreach ($tabMatiers as $Matier ): ?>
                                <option value="<?php echo $Matier->CodeMat ?>">
                                    <?php echo $Matier->LibelleMat ?>
                                </option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="" class="form-label">Du</label>
                        <div class="input-group">
                             <input type="date" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="dateTo" class="form-label">Au</label>
                        <input type="date" id="dateTo" class="form-control" >
                    </div>
                
                    <div>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                            <i class="fas fa-plus-circle me-1"></i> Nouvel étudiant
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
                            <?php foreach ($tabEvaluation as $Evaluation ): ?>
                                <tr>
                                    <th scope="row"><?php echo htmlspecialchars($Evaluation->Date) ?></th>
                                    <td><?php echo $Evaluation->Nom ,' ' , $Evaluation->Prenom ?></td>
                                    <td><?php echo htmlspecialchars($Evaluation->LibelleMat) ?></td>
                                    <td> <span class="badge badge-coeff"><?php echo htmlspecialchars($Evaluation->CoeffMat) ?></span></td>
                                    <td><span class="badge bg-success"><?php echo htmlspecialchars($Evaluation->Note) ?></span></td>
                                    <td>
                                        <button class="btn btn-outline-secondary"><i class="fas fa-pencil-alt"></i></button>
                                        <a href="index.php?page=evaluations&action=delete&idE=<?= $Evaluation->NEtudiant?>&idM=<?= $Evaluation->CodeMat?> " class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ; ?>
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

    <div class="modal fade" id="addStudentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="index.php?page=evaluations&action=store" method="post" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvelle Evaluation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Etudient</label>
                            <select iid="etudient" name="etudient" class="form-select">
                                <option selected>Tous</option>
                                <?php foreach ($tabEtudiants as $Etudiant ): ?>
                                    <option value="<?php echo $Etudiant->NEtudiant ?>">
                                        <?php echo $Etudiant->Nom ,' ' , $Etudiant->Prenom ?>
                                    </option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Matier</label>
                            <select id="matier" name="matier" class="form-select">
                                <option selected>Tous</option>
                                <?php foreach ($tabMatiers as $Matier ): ?>
                                    <option value="<?php echo $Matier->CodeMat ?>">
                                        <?php echo $Matier->LibelleMat ?>
                                    </option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Note</label>
                            <input name="note" id="note" class="form-control" required>
                            <span class="text-muted">value entre 0 et 20</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>