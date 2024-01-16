<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$reason = $_POST["reason"];

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$reason;
//File書き込み
$file = fopen("data/data.txt","a");  // ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #CEC5F0;
        margin: 0;
        padding: 0;
        text-align: center;
    }
    .container {
        background-color: #ffffff;
        border: 1px solid #ccc;
        padding: 20px;
        margin: 40px auto;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 500px;
    }

    a {
        text-decoration: none;
        margin: 20px;
    }
    a:hover {
        text-decoration: underline;
    }
    ul {
        list-style: none;
        padding: 0;
    }
    li {
        margin: 10px 0;
    }
</style>
</head>
<body>

<div class="container">
    <h1>書き込み完了しました。</h1>
    <a href="read.php">回答結果を見る</a>
    <ul>
        <li><a href="post.php">再度アンケートに答える</a></li>
    </ul>
</div>

</body>
</html>
