<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập trắc nghiệm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bài tập trắc nghiệm</h1>
        <form method="POST" action="index.php?action=submit">
            <?php foreach ($questions as $index => $question): ?>
                <div class="card mb-4">
                    <div class="card-header"><strong><?= $question[0] ?></strong></div>
                    <div class="card-body">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <?php $answer = substr($question[$i], 0, 1); ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $index ?>" value="<?= $answer ?>" id="q<?= $index . $answer ?>">
                                <label class="form-check-label" for="q<?= $index . $answer ?>"><?= $question[$i] ?></label>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Nộp bài</button>
        </form>
    </div>
</body>
</html>
