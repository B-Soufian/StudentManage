<?php 
class EtudiantMod{
    public $nom;
    public $prenom;
    public static function getAllEtudiants(){
        global $conn;
        $req = 'SELECT * FROM etudiant';
        $req = 'SELECT 
                e.NEtudiant,
                ev.Note,
                e.Nom,
                e.Prenom,
                FORMAT(SUM(ev.Note * m.CoeffMat) / SUM(m.CoeffMat), 2) AS MoyennePonderee
                FROM ETUDIANT e
                JOIN EVALUER ev ON e.NEtudiant = ev.NEtudiant
                JOIN MATIERE m ON ev.CodeMat = m.CodeMat
                GROUP BY e.NEtudiant, e.Nom, e.Prenom ,ev.Note';
        $sel = $conn->prepare($req);
        $sel->execute();
        $TabEtudiant = $sel->fetchAll(PDO::FETCH_OBJ);
        return $TabEtudiant;
    }
    
}

?>