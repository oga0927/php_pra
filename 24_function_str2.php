<?php

// 指定文字列で分割

$str_2 = '指定文字列で、分割代入します';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

// 正規表現
// 文字列かどうか
// 数字かどうか
// 郵便番号
// メールアドレスか test@gmail.com
// 上記をチェックするときに使う

$str_3 = '特定の文字列が含まれるか確認する';

echo preg_match('/文字列/', $str_3);

// 指定文字列を取得する
echo substr('abcde', 2);

echo '<br>';

echo substr('あいう', 2);

echo '<br>';

// mb = マルチバイト
echo mb_substr('かきくけこ', 2);
