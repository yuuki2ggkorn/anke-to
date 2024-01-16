メモ

post.php
・アンケート作成
・UI作成
・formでwrite.phpにpost

get_confirm.php
確認用

post_confirm.php
確認用

read.php
・アンケート結果をここで表示

write.php
・データをpost.phpから送られる
・文字列作成とファイル書き込みがされる


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