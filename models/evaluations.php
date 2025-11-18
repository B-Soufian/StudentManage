<?php 
class EvaluationsMod{
    public $nom;
    public $prenom;
    public static function getAllEvaluations(){
        global $conn;
        $req = 'SELECT ev.Date , e.Nom , e.Prenom , m.LibelleMat , m.CoeffMat , e.NEtudiant , m.CodeMat , ev.Note 
        FROM EVALUER ev
        JOIN etudiant e ON e.NEtudiant = ev.NEtudiant
        JOIN matiere m on ev.CodeMat = m.CodeMat 
         ';
        $sel = $conn->prepare($req);
        $sel->execute();
        $TabEvaluations = $sel->fetchAll(PDO::FETCH_OBJ);
        return $TabEvaluations;
    }
    public static function getAllMatiers(){
    global $conn;
    $req = 'SELECT * FROM MATIERE';
    $sel = $conn->prepare($req);
    $sel->execute();
    return $sel->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getAllEtud(){
        global $conn;
        $req = 'SELECT * FROM ETUDIANT';
        $sel = $conn->prepare($req);
        $sel->execute();
        return $sel->fetchAll(PDO::FETCH_OBJ);
    }
    public static function create($CodeMat,$Date,$NEtudiant,$Note){
        global $conn;
        $sql = "INSERT INTO evaluer (CodeMat, `Date`, NEtudiant, Note) VALUES (:CodeMat, :Date, :NEtudiant, :Note)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':CodeMat' => $CodeMat,
            ':Date' => $Date,
            ':NEtudiant' => $NEtudiant,
            ':Note' => $Note
        ]);
        return $conn->lastInsertId();
    }
    public static function delete($idE,$idM){
        global $conn;
        $stmt = $conn->prepare("DELETE FROM evaluer WHERE CodeMat = :idM and NEtudiant = :idE");
        $stmt->execute([':idM' => $idM,':idE' => $idE]);   
    }
    
}

?>