<?php
function __autoload($class)
{ 
  require_once str_replace("\\", "/", $class) . '.php';
}
