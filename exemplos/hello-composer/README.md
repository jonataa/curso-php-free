# Projeto de Exemplo do Composer

## Instalando as dependências
Digite o comando abaixo:
```shell
$ php composer.phar update
```

## Levantando o servidor Web
```shell
$ php -S localhost:9000 -t public/
```

## Rotas do Sistema

```
GET /hello/{nome}
```
Exemplo:
```
http://localhost:9000/hello/foo
```
