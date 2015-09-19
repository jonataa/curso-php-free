<?php

class Session
{

  protected $storage = [];

  public function __construct($session)
  {
    $this->storage = $session;
  }

  public function get($key)
  {
    return $this->storage[md5($key)];
  }

  public function attach($key, $value)
  {
    $this->storage[md5($key)] = $value;
  }

  public function contains($key)
  {
    return array_key_exists(md5($key), $this->storage);
  }

}
