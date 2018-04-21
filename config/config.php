<?php

$db = new mysqli('localhost', 'root', '', 'boogle');
if($db->connect_error)
{
  die("error connecting to database - {$db->connect_errno} - {$db->connect_error} ");
}


require dirname(__DIR__).'/vendor/autoload.php';