<?php

class PDOFactory
{
  public static function create()
  {
    return new PDO('sqlite:'.__DIR__.'/../database.sq3');
  }
}
