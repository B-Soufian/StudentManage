<?php
class DashboardCon {
    private $model;
    public $data = [];

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $studentCount    = $this->model->getStudentCount();
        $subjectCount   = $this->model->getSubjectCount();
        $evaluationCount = $this->model->getEvaluationCount();
        $topStudents   = $this->model->getTopStudents();
        $topSubjects     = $this->model->getTopSubjects();
        
        require 'views/dashbord.php';
    }
}
