<?php
class Db
{
  protected static $db;

  public static function init()
  {
    $db = new mysqli('localhost', 'root', '', 'boogle');
    if($db->connect_error)
    {
      die("error connecting to database - {$db->connect_errno} - {$db->connect_error} ");
    }
    self::db = $db;
  }

  public static function getObj()
  {
    if(self::db == null)
    {
      new Db();
    }
    return self::db;
  }
}