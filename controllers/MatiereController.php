<?php
class MatiereCon {
    public function index() {
        $tabMatiers = MatiereMod::getAllMatiers();
        include 'views/matieres/list.php';
    }
    public function store() {
        $Libelle = trim($_POST['Libelle'] ?? '');
        $Coeff = trim($_POST['Coeff'] ?? '');

        $errors = [];
        if ($nom === '') $errors[] = 'Le Libelle est requis.';
        if ($prenom === '') $errors[] = 'Le Coefficient est requis.';

        if (!empty($errors)) {
            $_SESSION['flash'] = ['type' => 'error', 'messages' => $errors];
            header('Location: index.php?page=matieres');
            exit;
        }
    
        $newId = MatiereMod::create($Libelle, $Coeff);
        $_SESSION['flash'] = ['type' => 'success', 'messages' => ["matieres ajouté (ID $newId)."]];

        header('Location: index.php?page=matieres');
        exit;
    }
    public function delete($id) {
        try {
            $ok = MatiereMod::delete($id);
            if ($ok) {
                $_SESSION['flash'] = ['type' => 'success', 'messages' => ["Matieres (ID $id) supprimé."]];
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'messages' => ["Impossible de supprimer matieres."]];
            }
        } catch (Exception $e) {
            $_SESSION['flash'] = ['type' => 'error', 'messages' => ['Erreur: '.$e->getMessage()]];
        }

        header('Location: index.php?page=matieres');
        exit;
    }

}
?>