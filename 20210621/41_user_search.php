<?php
require_once "../db_connect.php";

if (isset($_GET['search'])){
    $search = $_GET['search'];
    $sql = "SELECT account, name, id FROM users WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);
    $resultCount = $result -> num_rows;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row pt-3">
        <aside class="col-lg-2">
            <div class="list-group list-group-flush">
                <a href="33_user_list.php" class="list-group-item list-group-item-action">
                    使用者列表
                </a>
            </div>
        </aside>
        <div class="col-lg-10">
            <div class="d-flex justify-content-between my-3">
                <div class="py-2">共有 <?= $resultCount ?> 位使用者</div>
                <div>
                    <form class="d-flex" action="41_user_search.php" method="get">
                        <input type="text" class="form-control" name="search">
                        <button class="btn btn-info text-nowrap" type="submit">搜尋</button>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-sm">
                <div class="py-2"><?= $search ?> 搜尋結果。</div>
                <thead>
                <tr>
                    <th>序號</th>
                    <th>帳號</th>
                    <th>姓名</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($resultCount > 0) {
                while ($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?= $row["id"]?></td>
                    <td><?= $row["account"]?></td>
                    <td><?= $row["name"]?></td>
                    <td><a class="btn btn-info" href="34_user.php?id=<?= $row["id"]?>">瀏覽</a></td>
                </tr>
                    <?php
                }
                }else{
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