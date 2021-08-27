<?php

$globalScope = 'グローバルな変数です';

function localScope($val)
{
  $localScope = 'ローカルな変数です';
  echo $localScope;
}

echo $globalScope;
