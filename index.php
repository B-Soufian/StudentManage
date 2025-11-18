<?php
require 'models/connection.php';
require 'models/Matiere.php';
require 'models/Etudiant.php';
require 'models/evaluations.php';
require 'controllers/EtudiantController.php';
require 'controllers/MatiereController.php';
require 'controllers/EvaluationsController.php';
$EtudiantList = new EvaluationsCon();
$EtudiantList->index();

?>