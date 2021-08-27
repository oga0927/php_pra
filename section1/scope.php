<?php

$globalScope = 'グローバルな変数です';

function localScope()
{
  $localScope = 'ローカルな変数です';
  echo $localScope;
}

echo $globalScope;
