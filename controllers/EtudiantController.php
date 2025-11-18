<?php
class EtudiantCont {

    function index() {
        $tabEtudiants = EtudiantMod::getAllEtudiants();
        include 'views/etudiants/list.php';
    }
    public function store() {
        $nom = trim($_POST['nom'] ?? '');
        $prenom = trim($_POST['prenom'] ?? '');

        $errors = [];
        if ($nom === '') $errors[] = 'Le nom est requis.';
        if ($prenom === '') $errors[] = 'Le prénom est requis.';

        if (!empty($errors)) {
            $_SESSION['flash'] = ['type' => 'error', 'messages' => $errors];
            header('Location: index.php?page=etudiants');
            exit;
        }
    
        $newId = EtudiantMod::create($nom, $prenom);
        $_SESSION['flash'] = ['type' => 'success', 'messages' => ["Étudiant ajouté (ID $newId)."]];

        header('Location: index.php?page=etudiants');
        exit;
    }

    public function delete($id) {
        try {
            $ok = EtudiantMod::delete($id);
            if ($ok) {
                $_SESSION['flash'] = ['type' => 'success', 'messages' => ["Étudiant (ID $id) supprimé."]];
            } else {
                $_SESSION['flash'] = ['type' => 'error', 'messages' => ["Impossible de supprimer l'étudiant."]];
            }
        } catch (Exception $e) {
            $_SESSION['flash'] = ['type' => 'error', 'messages' => ['Erreur: '.$e->getMessage()]];
        }

        header('Location: index.php?page=etudiants');
        exit;
    }

}

?>