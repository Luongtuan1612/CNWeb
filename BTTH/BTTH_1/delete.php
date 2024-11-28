<?php
include 'includes/data.php';
$id = $_GET['id'];

unset($flowers[$id]);
$flowers = array_values($flowers); // Sắp xếp lại chỉ mục mảng

file_put_contents('includes/data.php', '<?php $flowers = ' . var_export($flowers, true) . ';');
header('Location: admin.php');
exit;
?>
