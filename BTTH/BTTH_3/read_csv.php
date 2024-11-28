<?php
$filename = "users.csv";
$users = [];

// Mở file CSV
if (($handle = fopen($filename, "r")) !== FALSE) {
    // Đọc dòng đầu tiên (tiêu đề cột)
    $headers = fgetcsv($handle, 1000, "\t");
    while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
        $users[] = array_combine($headers, $data);
    }

    fclose($handle);
}

return $users; 
?>
