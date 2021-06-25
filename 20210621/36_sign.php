<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center pt-3">
        <div class="col-lg-4">
            <form id="form" d="form" action="37_doSign.php" method="post" >
                <h1 class="text-center">註冊</h1>
                <div class="mb-2">
                    <label for="">帳號</label>
                    <input class="form-control" type="text" name="account" id="account">
                </div>
                <div class="mb-2">
                    <label for="">密碼</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="mb-2">
                    <label for="">帳再次輸入密碼</label>
                    <input class="form-control" type="password" name="repassword" id="repassword">
                </div>
                <button class="btn btn-info" id="sign" type="submit">送出</button>
            </form>
        </div>
    </div>
</div>
<script>
    let sign = document.querySelector('#sign');
    let password = document.querySelector('#password');
    let repassword = document.querySelector('#repassword');
    let form = document.querySelector('#form');

    sign.addEventListener('click', function (e){
        e.preventDefault();
        if (password.value === repassword.value){
            form.submit()
        }else{
            alert('密碼前後不一');
        }
    })
</script>


</body>
</html>
