<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bài tập trắc nghiệm</h1>
        <?php
        $filename = "questions.txt";
        $questions = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Xử lý bài làm
            $answers = [];
            foreach ($questions as $line) {
                if (strpos($line, "Đáp án:") !== false) {
                    $answers[] = trim(substr($line, strpos($line, ":") + 1));
                }
            }

            $score = 0;
            foreach ($_POST as $key => $userAnswer) {
                $questionNumber = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
                if (isset($answers[$questionNumber - 1]) && $answers[$questionNumber - 1] === $userAnswer) {
                    $score++;
                }
            }

            echo "<div class='alert alert-success text-center'>";
            echo "Bạn trả lời đúng <strong>$score</strong>/" . count($answers) . " câu.";
            echo "</div>";
            echo "<div style='display: flex; justify-content: center; align-items: center; '>
            <a href='index.php' class='btn btn-primary'>Làm lại</a>
          </div>";
    
        } else {
            // Hiển thị câu hỏi
            echo "<form method='POST'>";
            $current_question = [];
            $number = 0;

            foreach ($questions as $line) {
                if (strpos($line, "Câu") === 0) {
                    if (!empty($current_question)) {
                        $number++;
                        echo "<div class='card mb-4'>";
                        echo "<div class='card-header'><strong>{$current_question[0]}</strong></div>";
                        echo "<div class='card-body'>";
                        for ($i = 1; $i <= 4; $i++) {
                            $answer = substr($current_question[$i], 0, 1); // A, B, C, D
                            echo "<div class='form-check'>";
                            echo "<input class='form-check-input' type='radio' name='question{$number}' value='{$answer}' id='question{$number}{$answer}'>";
                            echo "<label class='form-check-label' for='question{$number}{$answer}'>{$current_question[$i]}</label>";
                            echo "</div>";
                        }
                        echo "</div>";
                        echo "</div>";
                    }
                    $current_question = [];
                }
                $current_question[] = $line;
            }

            // Xử lý câu hỏi cuối cùng
            if (!empty($current_question)) {
                $number++;
                echo "<div class='card mb-4'>";
                echo "<div class='card-header'><strong>{$current_question[0]}</strong></div>";
                echo "<div class='card-body'>";
                for ($i = 1; $i <= 4; $i++) {
                    $answer = substr($current_question[$i], 0, 1); // A, B, C, D
                    echo "<div class='form-check'>";
                    echo "<input class='form-check-input' type='radio' name='question{$number}' value='{$answer}' id='question{$number}{$answer}'>";
                    echo "<label class='form-check-label' for='question{$number}{$answer}'>{$current_question[$i]}</label>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
            }

            echo "<button type='submit' class='btn btn-primary'>Nộp bài</button>";
            echo "</form>";
        }
        ?>
    </div>
</body>
</html>
