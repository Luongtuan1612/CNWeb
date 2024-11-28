<?php
$users = include('read_csv.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center margin-top-50px">Danh sách người dùng</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <?php
                    if (!empty($headers)) {
                        foreach ($headers as $header) {
                            echo "<th>" . htmlspecialchars($header) . "</th>";
                        }
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($users)) {
                    foreach ($users as $user) {
                        echo "<tr>";
                        foreach ($headers as $header) {
                            echo "<td>" . htmlspecialchars($user[$header]) . "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='100%' class='text-center'>Không có dữ liệu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
