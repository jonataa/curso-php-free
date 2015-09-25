<?php

class Session
{

  protected $storage = [];

  public function __construct($type)
  {
    $this->type = $type;

    session_start();
    $this->storage = &$_SESSION;
  }

  public function get($key)
  {
    if (isset($this->storage[$this->type][$this->cript($key)])) {
      return $this->storage[$this->type][$this->cript($key)];
    }
  }

  public function attach($key, $value)
  {
    $this->storage[$this->type][$this->cript($key)] = $value;
  }

  public function contains($key)
  {
    if (isset($this->storage[$this->type]))
      return array_key_exists($this->cript($key), $this->storage[$this->type]);
  }

  public function all()
  {
    return $this->storage;
  }

  protected function cript($key)
  {
    return md5($key);
  }

}
