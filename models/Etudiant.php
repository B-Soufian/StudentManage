<?php 
class EtudiantMod{
    public $nom;
    public $prenom;
    public static function getAllEtudiants(){
        global $conn;
        $req = 'SELECT 
                e.NEtudiant,
                ev.Note,
                e.Nom,
                e.Prenom,
                FORMAT(SUM(ev.Note * m.CoeffMat) / SUM(m.CoeffMat), 2) AS MoyennePonderee
                FROM ETUDIANT e
                LEFT JOIN EVALUER ev ON e.NEtudiant = ev.NEtudiant
                LEFT JOIN MATIERE m ON ev.CodeMat = m.CodeMat
                GROUP BY e.NEtudiant, e.Nom, e.Prenom';
        $sel = $conn->prepare($req);
        $sel->execute();
        $TabEtudiant = $sel->fetchAll(PDO::FETCH_OBJ);
        return $TabEtudiant;
    }
    public static function create(string $nom, string $prenom){
        global $conn;
        $sql = "INSERT INTO ETUDIANT (Nom, Prenom) VALUES (:nom, :prenom)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom
        ]);
        return $conn->lastInsertId();
    }
    public static function delete(int $id): bool {
        global $conn;
        try {
            $conn->beginTransaction();
            $stmt = $conn->prepare("DELETE FROM ETUDIANT WHERE NEtudiant = :id");
            $stmt->execute([':id' => $id]);

            $conn->commit();
            return true;
        } catch (Exception $e) {
            $conn->rollBack();
            return false;
        }
    }
    
}

?>