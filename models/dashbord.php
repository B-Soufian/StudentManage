<?php
class DashboardModel {
    private $conn;

    public function __construct($pdo) {
        $this->conn = $pdo;
    }

    public function getStudentCount() {
        $stmt = $this->conn->query("SELECT COUNT(*) FROM ETUDIANT");
        return  $stmt->fetchColumn();
    }

    public function getSubjectCount() {
        $stmt = $this->conn->query("SELECT COUNT(*) FROM MATIERE");
        return  $stmt->fetchColumn();
    }

    public function getEvaluationCount() {
        $stmt = $this->conn->query("SELECT COUNT(*) FROM EVALUER");
        return  $stmt->fetchColumn();
    }

    public function getTopStudents() {
        $sql = "
            SELECT
                E.NEtudiant,
                E.Nom,
                E.Prenom,
                FORMAT(SUM(EV.Note * M.CoeffMat) / (SUM(M.CoeffMat)),2) AS MoyenneGenerale,
                COUNT(DISTINCT EV.CodeMat) AS NbMatieres
            FROM ETUDIANT E
            JOIN EVALUER EV ON E.NEtudiant = EV.NEtudiant
            JOIN MATIERE M ON EV.CodeMat = M.CodeMat
            GROUP BY E.NEtudiant, E.Nom, E.Prenom
            ORDER BY MoyenneGenerale DESC
            LIMIT 5
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getTopSubjects() {
        $sql = "
            SELECT
                M.CodeMat,
                M.LibelleMat,
                M.CoeffMat,
                FORMAT(AVG(EV.Note),2) AS MoyenneMatiere
            FROM MATIERE M
            JOIN EVALUER EV ON M.CodeMat = EV.CodeMat
            GROUP BY M.CodeMat, M.LibelleMat, M.CoeffMat
            ORDER BY MoyenneMatiere DESC
            LIMIT 5
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
