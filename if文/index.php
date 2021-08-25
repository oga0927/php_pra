<?php

$height = 90;
if ($height === 92) {
  echo '身長は' . $height . 'cmです';
} else {
  echo '身長は' . $height . 'cmではありません';
}

$signal = 'blue';

if ($signal === 'red') {
  echo '止まれ';
} else if ($signal === 'yellow') {
  echo '停止';
} else {
  echo '進め';
}

echo '<br>';

/*if文の中にif文は入れない。ネストさせないように注意*/
$speed = 80;
if ($speed >= 90) {
  echo 'セーフ';
}

if ($speed <= 80) {
  echo 'スピード違反';
}

// データが吐いているかの判定
// isset empty is_null
echo '<br>';

$test = '1';

if (!empty($test)) {
  echo '変数は空ではありません';
}

echo '<br>';

// AND と OR

$signal_1 = 'red';
$signal_2 = 'yellow';

if ($signal_1 === 'red' || $signal_2 === 'blue') {
  echo '赤です';
}

echo '<br>';

// 三項演算子
// if else　// 条件 ? 真 : 偽

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo $comment;
