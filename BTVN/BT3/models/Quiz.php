<?php
class Quiz {
    private $questions = [];
    private $answers = [];

    public function __construct($filename) {
        if (file_exists($filename)) {
            $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $currentQuestion = [];
            foreach ($lines as $line) {
                if (strpos($line, "Câu") === 0) {
                    if (!empty($currentQuestion)) {
                        $this->addQuestion($currentQuestion);
                    }
                    $currentQuestion = [];
                }
                $currentQuestion[] = $line;
            }
            if (!empty($currentQuestion)) {
                $this->addQuestion($currentQuestion);
            }
        }
    }

    private function addQuestion($questionData) {
        $this->questions[] = array_slice($questionData, 0, -1);
        $this->answers[] = trim(substr(end($questionData), strpos(end($questionData), ":") + 1));
    }

    public function getQuestions() {
        return $this->questions;
    }

    public function checkAnswers($userAnswers) {
        $score = 0;
        foreach ($this->answers as $index => $correctAnswer) {
            if (isset($userAnswers[$index]) && $userAnswers[$index] === $correctAnswer) {
                $score++;
            }
        }
        return $score;
    }

    public function getTotalQuestions() {
        return count($this->answers);
    }
}
