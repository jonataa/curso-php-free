<?php
class CepApi
{
  const URL = "http://cep.correiocontrol.com.br/%s.json";

  private $cep;

  public function __construct($cep)
  {
    $this->cep = $cep;
  }

  public function buscar()
  {
    $url = sprintf(self::URL, $this->cep);
    $apiJson = file_get_contents($url);
    return json_decode($apiJson);
  }

}
