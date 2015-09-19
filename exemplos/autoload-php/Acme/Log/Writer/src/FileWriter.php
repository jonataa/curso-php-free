<?php

namespace Acme\Log\Writer;

class FileWriter
{

  public function info($msg)
  {
    echo '[INFO] ' . $msg . PHP_EOL;
  }

}
