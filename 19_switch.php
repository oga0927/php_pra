<?php
// switch文は使わない
// if文で処理するのが好ましい

$data = '1';

//== switch
//=== 型も等しい

switch ($data) {
  case $data === 1:
    echo '1です';
    break;
  case 2;
    echo '2です';
    break;
  case 3;
    echo '3です';
    break;
  default;
    echo '1-3ではありません';
}
