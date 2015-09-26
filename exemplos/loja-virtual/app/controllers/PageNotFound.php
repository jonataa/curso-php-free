<?php

class PageNotFound
{

  public function __construct(Template $template)
  {
    $this->template = $template;
  }

  public function __invoke()
  {
    http_response_code(404);
    $this->template->render('404.html');
  }
}
