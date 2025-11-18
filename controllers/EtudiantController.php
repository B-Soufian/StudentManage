<?php
class EtudiantCont {

    function list() {
        $tabEtudiants = EtudiantMod::getAllEtudiants();
        include 'views/etudiants/list.php';
    }

}

?>