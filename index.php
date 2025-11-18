<?php
session_start();
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
$action = $_GET['action'] ?? 'index';


switch ($page) {
    case 'etudiants':
        $controller = new EtudiantCont();
        if ($_SERVER['REQUEST_METHOD'] === 'POST'  && $action === 'store') {
            $controller->store();
            exit;
        }
        if ($action === 'delete') {
            $controller->delete($_GET['id']);
            exit;
        }
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
