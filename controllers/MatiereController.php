<?php
class MatiereCon {
    function index() {
        $tabMatiers = MatiereMod::getAllMatiers();
        include 'views/matieres/list.php';
    }
}
?>