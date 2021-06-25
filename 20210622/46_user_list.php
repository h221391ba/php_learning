<?php
require_once "../db_connect.php";

/**
 * 星星代表將所有資料讀出來
 * $conn 是mySQL物件
 * ->類似於js中的. (用於物件)
 * query(SQL語法)
 *
 * $result (mysqli_result)會是物件
 *
 * 語法 "SELECT * FROM users" 會將所有資料撈出
 * 如果要選特定的資料要使用
 *"SELECT id, account, name, email, phone FROM users"
 */
//$sql = "SELECT * FROM users";
$sql = "SELECT id, account, name, email, phone FROM users WHERE valid=1";
$result = $conn->query($sql);

/**
 * 檢查($result->num_rows)[資料筆數]此物件是否為空
 * $row 會是關聯式陣列
 */
//if ($result->num_rows > 0) {
//    // output data of each row
////fetch_assoc() 將讀出的資料Key值設定為該欄位的欄位名稱。
//    while ($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"] . " : 姓名: " . $row["name"] . ", 電話: " . $row["phone"] . ", email: " . $row["email"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row pt-3">
        <aside class="col-lg-2">
            <div class="list-group list-group-flush">
                <a href="46_user_list.php" class="list-group-item list-group-item-action">
                    使用者列表
                </a>
            </div>
        </aside>
        <div class="col-lg-10">
            <div class="d-flex justify-content-between my-3">
                <div class="py-2">共有 <?= $result->num_rows ?> 位使用者</div>
                <form class="d-flex" action="41_user_search.php" method="get">
                    <input type="text" class="form-control" name="search">
                    <button class="btn btn-info text-nowrap" type="submit">搜尋</button>
                </form>
            </div>
            <div class="pb-2 d-flex justify-content-end">
                <a href="30_creat_user.php" class="btn btn-info">新增使用者</a>
            </div>
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th>序號</th>
                    <th>帳號</th>
                    <th>姓名</th>
                    <th>email</th>
                    <th>電話</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["account"] ?></td>
                            <td><?= $row["name"] ?></td>
                            <td><?= $row["email"] ?></td>
                            <td><?= $row["phone"] ?></td>
                            <td>
                                <a class="btn btn-info" href="/20210621/34_user.php?id=<?= $row["id"] ?>">瀏覽</a>
                                <a class="btn btn-danger" href="47_delete_user.php?id=<?= $row["id"] ?>">刪除</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "沒有使用者資料";
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
            crossorigin="anonymous"></script>
</body>
</html>