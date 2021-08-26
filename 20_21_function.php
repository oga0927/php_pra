<?php


// インプット　引数なし
// アウトプット　引数なし

function test()
{
  echo 'テスト';
}

test();

// インプット　引数あり
// アウトプット　戻り値なし

$comment = 'コメント2';

function getComment($string)
{
  echo $string;
}

getComment($comment);


echo '<br>';

// インプット　引数なし
// アウトプット　戻り値あり

function getNumberOfComment()
{
  return 8;
}

$commentNumber = getNumberOfComment();

echo $commentNumber;

echo '<br>';

// 引数2つ
// 戻り値あり

function sumPrice($int1, $int2)
{
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3, 5);

echo $total;
