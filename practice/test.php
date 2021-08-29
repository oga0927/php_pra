<?php

$contactFile = '.contact.dat';

// 第二引数でモードを選択
$contents = fopen($contactFile, 'a+');

// 文字を追記
$addText = '1行追記' . "\n";


fwrite($contents, $addText);

fclose($contents);



































// // ファイルを読み込む関数
// $fileContents = file_get_contents($contactFile);

// // echo $fileContents;

// // ファイルを書き込み(上書き)
// // file_put_contents($contactFile, 'テストです');
// // $addText = 'テストです' . "\n";

// // ファイルを書き込み(追記)
// // file_put_contents($contactFile, $addText, FILE_APPEND);

// // 配列 file,　区切る explode, foreach

// $allData = file($contactFile);

// foreach ($allData as $lineData) {
//   $lines = explode(',', $lineData);
//   echo $lines[0] . '<br>';
//   echo $lines[1] . '<br>';
//   echo $lines[2] . '<br>';
// }
