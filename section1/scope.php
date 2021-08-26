<?php

$globalScope = 'グローバルな変数です';


function localScope($str)
{
  // $local = 'ローカルな変数です';
  echo $str;
}

localScope($globalScope);
