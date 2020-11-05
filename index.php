<?php
//セッション開始
session_start();

// ランダムな文字列を生成してセッションに設定
$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);
$_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/app.css">
    <title>Contact Form</title>
</head>

<body>

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>

</html>