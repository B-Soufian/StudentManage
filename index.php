<?php
require 'models/connection.php';
require 'models/Matiere.php';
require 'models/Etudiant.php';
require 'models/evaluations.php';
require 'models/dashbord.php';

require 'controllers/EtudiantController.php';
require 'controllers/MatiereController.php';
require 'controllers/EvaluationsController.php';
require 'controllers/DashbordController.php';

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'etudiants':
        $controller = new EtudiantCont();
        $controller->index();
        break;

    case 'matieres':
        $controller = new MatiereCon();
        $controller->index();
        break;

    case 'evaluations':
        $controller = new EvaluationsCon();
        $controller->index();
        break;

    case 'dashboard':
    default:
        $model = new DashboardModel($conn);
        $controller = new DashboardCon($model);
        $controller->index();
        break;
}
?>
