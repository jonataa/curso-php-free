<?php

class PageNotFound
{

  public function __invoke()
  {
    http_response_code(404);
    echo 'Página não encontrada!';
  }
}
