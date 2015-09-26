<?php

class Template
{

  public function __construct($folder)
  {
    $this->folder = $folder;
  }

  public function render($file, array $data = array(), $layout = 'layout.phtml')
  {
    $this->getContents($file, $data);
    require $this->folder . $layout;
  }

  protected function getContents($file, $data)
  {
    extract($data);
    ob_start();
    require $this->folder . $file;
    $this->content = ob_get_contents();
    ob_end_clean();
  }

}
