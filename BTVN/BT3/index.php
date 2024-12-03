<?php
require_once 'controllers/QuizController.php';

$controller = new QuizController();
$action = $_GET['action'] ?? 'start';

if ($action === 'submit') {
    $controller->processQuiz();
} else {
    $controller->showQuizForm();
}
