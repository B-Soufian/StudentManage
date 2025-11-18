<?php
require 'models/connection.php';
require 'models/Etudiant.php';
require 'controllers/EtudiantController.php';
$EtudiantList = new EtudiantCont();
$EtudiantList->list();

?>