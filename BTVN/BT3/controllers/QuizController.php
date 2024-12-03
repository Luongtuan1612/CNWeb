<?php
require_once 'models/Quiz.php';

class QuizController {
    private $quiz;

    public function __construct() {
        $this->quiz = new Quiz("questions.txt");
    }

    public function showQuizForm() {
        $questions = $this->quiz->getQuestions();
        include 'views/quiz_form.php';
    }

    public function processQuiz() {
        $userAnswers = $_POST;
        $score = $this->quiz->checkAnswers($userAnswers);
        $total = $this->quiz->getTotalQuestions();
        include 'views/result.php';
    }
}
