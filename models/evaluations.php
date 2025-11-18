<?php 
class EvaluationsMod{
    public $nom;
    public $prenom;
    public static function getAllEvaluations(){
        global $conn;
        $req = 'SELECT * FROM etudiant';
        $req = 'SELECT ev.Date , e.Nom , e.Prenom , m.LibelleMat , m.CoeffMat ,
        FORMAT(SUM(ev.Note * m.CoeffMat) / SUM(m.CoeffMat), 2) AS MoyennePonderee 
        FROM EVALUER ev
        JOIN etudiant e ON e.NEtudiant = ev.NEtudiant
        JOIN matiere m on ev.CodeMat = m.CodeMat 
        GROUP BY ev.Date , e.Nom , e.Prenom , m.LibelleMat , m.CoeffMat';
        $sel = $conn->prepare($req);
        $sel->execute();
        $TabEvaluations = $sel->fetchAll(PDO::FETCH_OBJ);
        return $TabEvaluations;
    }
    
}

?>