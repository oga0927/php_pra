<?php

// スーパーグローバル変数 php 9種類
// 連想配列
if (!empty($_POST)) {
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
}

// 入力、確認、完了 input.php, confirm.php, thanks.php

$pageFlag = 0;

if (!empty($_POST['brn_confirm'])) {
  $pageFlag = 1;
}

if (!empty($_POST['brn_submit'])) {
  $pageFlag = 2;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>

<body>
  <?php if ($pageFlag === 1) : ?>
    <form method="POST" action="input.php">
      氏名
      <?php echo $_POST['your_name']; ?>
      <br>
      <?php echo $_POST['email']; ?>
      メールアドレス
      <br>
      <input type="submit" name="back" value="戻る">
      <input type="submit" name="brn_submit" value="送信する">
      <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
      <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    </form>
  <?php endif; ?>

  <?php if ($pageFlag === 2) : ?>
    送信が完了しました。
  <?php endif; ?>

  <?php if ($pageFlag === 0) : ?>
    <form method="POST" action="input.php">
      氏名
      <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) {
                                                    echo $_POST['your_name'];
                                                  } ?>">
      <br>
      メールアドレス
      <input type="email" name="email" value="<?php if (!empty($_POST['email'])) {
                                                echo $_POST['email'];
                                              } ?>">
      <br>
      <input type="submit" name="brn_confirm" value="確認する">
    </form>
  <?php endif; ?>

</body>

</html>