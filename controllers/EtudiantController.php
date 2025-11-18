<?php
class EtudiantCont {

    function index() {
        $tabEtudiants = EtudiantMod::getAllEtudiants();
        include 'views/etudiants/list.php';
    }

}

?>