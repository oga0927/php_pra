<?php

// 複数の値

$members = [
  'name' => 'ミッキー',
  'name2' => 'ミニー'
];


// バリューのみ表示
foreach ($members as $member) {
  echo $member;
}

echo '<br>';

// キーとバリューの両方を表示
foreach ($members as $key => $value) {
  echo $key . 'は' . $value . 'です';
}

echo '<br>';

$members_2 = [
  'ミッキー' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  'ミニー' => [
    'height' => 160,
    'hobby' => 'バレー'
  ]
];

echo '<br>';

// 他段階の配列を展開
foreach ($members_2 as $member_1) {
  foreach ($member_1 as $member => $value) {
    echo $member . 'は' . $value . 'です';
  }
}
