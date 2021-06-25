<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <form action="19_post_data.php" method="post">
        <div class="mb-2">
            <label for="">水果</label>
            <input type="text" class="form-control" name="fruit">
        </div>
        <div class="mb-2">
            <label for="">地址</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-2">
            <label for="">手機</label>
            <input type="tel" class="form-control" name="phones[]">
            <input type="tel" class="form-control" name="phones[]">
            <input type="tel" class="form-control" name="phones[]">
        </div>
        <div class="mb-2">
            <lable for="">電信商</lable>
            <select class="form-select" name="telecom" id="">
                <!--用代號-->
                <option value="1">中華電信</option>
                <option value="2">台哥大</option>
                <option value="3">遠傳</option>
                <option value="0">其他</option>
            </select>
        </div>
        <div class="mb-2">
            <label for="">性別</label>
            <input type="radio" name="gender" value="male">男性
            <input type="radio" name="gender" value="female">女性
        </div>
        <button class="btn btn-info" type="submit">送出</button>
    </form>
</div>
</body>
</html>