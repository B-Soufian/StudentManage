<?php 
class MatiereMod{
    public $LibelleMat;
    public $CoeffMat;
    public static function getAllMatiers(){
        global $conn;
        $req = 'SELECT m.LibelleMat,
                m.CoeffMat,
                m.CodeMat,
                FORMAT(AVG(e.Note),2)  AS MoyenneMatiere
                FROM EVALUER e
                JOIN MATIERE m ON e.CodeMat = m.CodeMat
                GROUP BY m.LibelleMat,m.CoeffMat,m.CodeMat';
        $sel = $conn->prepare($req);
        $sel->execute();
        $TabMatiers = $sel->fetchAll(PDO::FETCH_OBJ);
        return $TabMatiers;
    }
    
}

?>