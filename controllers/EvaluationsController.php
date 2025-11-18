<?php
class EvaluationsCon {
    function index() {
        $tabEvaluation = EvaluationsMod::getAllEvaluations();
        $tabEtudiants = EvaluationsMod::getAllEtud();
        $tabMatiers   = EvaluationsMod::getAllMatiers();
        include 'views/evaluations/list.php';
    }
    public function delete($idE,$idM) {
        try {
            $ok = EvaluationsMod::delete($idE,$idM);
            if ($ok) {
                $_SESSION['flash'] = ['type' => 'success', 'messages' => ["Matieres (ID $id) supprimé."]];
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'messages' => ["Impossible de supprimer evaluations."]];
            }
        } catch (Exception $e) {
            $_SESSION['flash'] = ['type' => 'error', 'messages' => ['Erreur: '.$e->getMessage()]];
        }

        header('Location: index.php?page=evaluations');
        exit;
    }
    public function store() {
        $date = trim($_POST['date'] ?? '');
        $note = trim($_POST['note'] ?? '');
        $matier = trim($_POST['matier'] ?? '');
        $etudient = trim($_POST['etudient'] ?? '');

        $errors = [];
        if ($date === '') $errors[] = 'Le Libelle est requis.';
        if ($note === '') $errors[] = 'Le Coefficient est requis.';
        if ($matier === '') $errors[] = 'Le Coefficient est requis.';
        if ($etudient === '') $errors[] = 'Le Coefficient est requis.';

        if (!empty($errors)) {
            $_SESSION['flash'] = ['type' => 'error', 'messages' => $errors];
            header('Location: index.php?page=matieres');
            exit;
        }
    
        $newId = EvaluationsMod::create($matier,$date,$etudient,$note);
        $_SESSION['flash'] = ['type' => 'success', 'messages' => ["matieres ajouté (ID $newId)."]];

        header('Location: index.php?page=evaluations');
        exit;
    }
}
?>