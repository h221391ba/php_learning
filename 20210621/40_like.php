<?php
//模糊比對搜尋利用 LIKE %
require_once "../db_connect.php";

$search = "ja";


$sql = "SELECT account, name, id FROM users WHERE name LIKE '%$search%'";

$result = $conn->query($sql);

echo $result->num_rows . '<br>';
?>