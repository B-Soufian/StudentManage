<?php
class EvaluationsCon {
    function index() {
        $tabEvaluation = EvaluationsMod::getAllEvaluations();
        include 'views/evaluations/list.php';
    }
}
?>