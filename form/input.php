<?php

if (!empty($_POST)) {
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
}

// スーパーグローバル変数 php 9種類
// 連想配列

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>

<body>
  <form method="POST" action="input.php">
    氏名
    <input type="text" name="your_name">
    <br>
    <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バレー">バレー

    <input type="submit" value="送信">

  </form>
</body>

</html>