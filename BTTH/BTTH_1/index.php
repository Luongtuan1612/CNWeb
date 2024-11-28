<?php
include 'includes/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>14 loại hoa tuyệt đẹp</title>
</head>
<body>
    <header>
        <h1>14 Loại Hoa Đẹp Nở Rộ Mùa Xuân - Hè</h1>
        <p>Mỗi loại hoa sẽ khoe sắc rực rỡ vào đúng thời điểm thích hợp trong năm, khí hậu đáp ứng thuận lợi sẽ giúp hoa phát triển nhanh và đẹp một cách hoàn hảo. Nếu đang có kế hoạch trồng hoa trong dịp xuân - hè thì bạn hãy tham khảo bài viết dưới đây nhé!</p>
    </header>
    <div class="container">
    <?php foreach ($flowers as $flower): ?>
        <div class="item">
            <h2><?php echo $flower['name']?></h2>
            <P><?php echo $flower['description']?></P>
            <img src="<?php echo $flower['image'] ?>" alt="<?php echo $flower['name'] ?>">
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>