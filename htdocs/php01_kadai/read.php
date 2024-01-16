<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style_read.css">
<title>結果表示</title>
</head>
<body>

<?php
include('funcs.php');
$file = fopen('data/data.txt', 'r'); // ファイルを開く

echo "<table border='1'>"; // テーブルの作成
echo "<tr><th>回答時刻</th><th>名前</th><th>Email</th><th>年齢</th><th>アンケートの理由</th></tr>"; // ヘッダー

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    // 文字列をカンマで分割して配列に
    $data = explode(",", $str);

    // テーブルの行として出力
    echo "<tr>";
    foreach ($data as $value) {
        echo "<td>" .h($value). "</td>";
    }
    echo "</tr>";
}

echo "</table>"; // テーブルの終了
fclose($file); // ファイルを閉じる
?>

<ul>
<li><a href="post.php">再度アンケートに答える</a></li>
</ul>
</body>
</html>
