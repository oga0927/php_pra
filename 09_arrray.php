<?php

// $array_1 = ['あああ', 2, 3];

// $array_2 = [
//   ['赤', '青', '黄'],
//   ['緑', '紫', 'ピンク']
// ];
// // echo $array[2];
// // echo $array[0];
// echo '<pre>';
// var_dump($array_2);
// echo '</pre>';

// echo $array_2[1][1];

$array_member = [
  'name' => 'ミッキー',
  'height' => 170,
  'park' => 'ディズニー'
];

echo $array_member['name'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_3 = [
  '1kumi' => [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ],
    '香川' => [
      'height' => 165,
      'hobby' => 'サッカー'
    ]
  ],
  '2kumi' => [
    '中田' => [
      'height' => 180,
      'hobby' => 'サッカー'
    ],
    '小野' => [
      'height' => 175,
      'hobby' => 'サッカー'
    ]
  ]
];

echo $array_member_3['2kumi']['小野']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';
