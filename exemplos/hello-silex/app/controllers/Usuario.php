<?php

namespace MyApp\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Symfony\Component\Validator\Constraints as Assert;

class Usuario
{

  public function salvar(Application $app, Request $req)
  {
    $user = array(
      'nome' => $req->get('nome'),
      'email' => $req->get('email'),
      'usuario' => $req->get('usuario'),
      'senha' => $req->get('senha')
    );
    $constrant = new Assert\Collection(array(
        'nome' => new Assert\NotBlank(),
        'email' => array(new Assert\NotBlank(), new Assert\Email()),
        'usuario' => new Assert\NotBlank(),
        'senha' => new Assert\NotBlank(),
    ));
    $data['errors'] = $app['validator']->validateValue($user, $constrant);

    return $app['twig']->render('usuario-cadastro.twig', $data);
  }

}
