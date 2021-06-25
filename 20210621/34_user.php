<?php
require_once "../db_connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row pt-3">
        <aside class="col-lg-2">
            <div class="list-group list-group-flush">
                <a href="user-list.php" class="list-group-item list-group-item-action">
                    使用者列表
                </a>
            </div>
        </aside>
        <div class="col-lg-10">
            <form  action="35_updateUser.php" method="post">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
                ?>
                <input type="hidden" name="id" value="<?= $row["id"]?>">
                <div class="mb-2">
                    <label for="">帳號</label>
                    <input  class="form-control-plaintext" type="text" name="account" value="<?= $row["account"]?>" readonly>
                </div>
                <div class="mb-2">
                    <label for="">姓名</label>
                    <input  class="form-control" type="text" name="name" value="<?= $row["name"]?>">
                </div>
                <div class="mb-2">
                    <label for="">email</label>
                    <input  class="form-control" type="text" name="email" value="<?= $row["email"]?>">
                </div>
                <div class="mb-2">
                    <label for="">電話</label>
                    <input  class="form-control" type="text" name="phone" value="<?= $row["phone"]?>">
                </div>
                <div class="mb-2">
                    註冊時間：<?= $row["creat_time"]?>
                </div>
                <?php
                    }
                }
                ?>
                <button class="btn btn-info" type="submit">更新</button>
            </form>
        </div>
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