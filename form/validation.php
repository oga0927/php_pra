<?php

function validation($request)
{ //$_POSTの連想配列
  // エラーをまとめて補完する
  $errors = [];

  if (empty($request['your_name']) || 20 < mb_strlen($request['your_name'])) {
    $errors[] = '氏名は20文字以内で入力してください';
  }

  if (!isset($request['gender'])) {
    $errors[] = '性別を選択してください';
  }

  if (empty($request['age']) || 6 < $request['age']) {
    $errors[] = '年齢を選択してください';
  }

  if (empty($request['contact']) || 200 < mb_strlen($request['contact'])) {
    $errors[] = '200文字以内で入力してください';
  }

  if (empty($request['caution'])) {
    $errors[] = '注意事項をご確認ください';
  }

  return $errors;
}
