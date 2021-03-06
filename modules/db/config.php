<?php

/*
Configure as many databases as you want.

One named "default" must be defined.
*/
$config = array(
  'requires'=>array(
    'class_lazyloader',
  ),
  'databases'=>array(
    'default'=>array(
      'host'=>"",
      'username'=>"",
      'password'=>"",
      'catalog'=>"",
    )
  ),
  'queries'=>array(),
  'connections'=>array(),
  'connection_stack'=>array(),
  'current'=>array(),
  'debug'=>false,
);