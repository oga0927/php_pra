<?php

// for 繰り返す処理が決まっている
// while 繰り返す処理は決まっていない

// continue, break できるだけ使わない
for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    // 処理を止める
    // break;

    // スキップする
    continue;
  }
  echo $i;
}

echo '<br>';

$A = 5;
while ($A < 5) {
  echo $A;
  $A++;
}
