<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <form action="./31_userCreat.php" method="post">
                <div class="mb-2">
                    <label for="account">帳號</label>
                    <input class="form-control" type="text" id="account" name="account">
                </div>
                <div class="mb-2">
                    <label for="name">姓名</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="mb-2">
                    <label for="email">email</label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
                <div class="mb-2">
                    <label for="phone">電話</label>
                    <div class="row">
                        <div class="col">
                            <input type="tel" class="form-control" id="phone" name="phone[]">
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" id="phone" name="phone[]">
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" id="phone" name="phone[]">
                        </div>
                    </div>
                    <!--單筆電話-->
                    <!--<input class="form-control" type="tel" id="phone" name="phone">-->
                </div>
                <button class="btn btn-info">新增</button>
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
