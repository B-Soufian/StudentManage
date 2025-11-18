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
                FROM MATIERE m
                LEFT JOIN EVALUER e ON e.CodeMat = m.CodeMat
                GROUP BY m.LibelleMat,m.CoeffMat,m.CodeMat';
        $sel = $conn->prepare($req);
        $sel->execute();
        $TabMatiers = $sel->fetchAll(PDO::FETCH_OBJ);
        return $TabMatiers;
    }
    
    public static function create(string $libb, string $coeff){
        global $conn;
        $sql = "INSERT INTO MATIERE(CoeffMat, LibelleMat) VALUES (:CoeffMat, :LibelleMat)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':CoeffMat' => $coeff,
            ':LibelleMat' => $libb
        ]);
        return $conn->lastInsertId();
    }
    public static function delete(int $id){
        global $conn;
        try {
            $conn->beginTransaction();
            $stmt = $conn->prepare("DELETE FROM MATIERE WHERE CodeMat = :id");
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