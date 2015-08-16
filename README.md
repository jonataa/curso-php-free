# Curso PHP: Do Jeito Certo
Conteúdo do curso "PHP: Do Jeito Certo" ministrado em parceria com a Universidade Salvador

## Objetivo
Ensinar a linguagem PHP de modo que os estudantes aprimorem suas habilidades na área e assim ao concluírem o curso possuam conhecimento amplo das noções básicas do mesmo, permitindo que os mesmos participem e/ou desenvolvam projetos que envolvam a referida linguagem, assim como, em outras atividades relacionadas à programação. O objetivo geral é, portanto, preparar os alunos na teoria e na prática para que programem do "jeito certo".
A fim de alcançar tais objetivos, torna-se necessário identificar os objetivos específicos. Estes seriam:
* Oportunizar aos participantes os conhecimentos sobre o desenvolvimento Web, utilizando da linguagem PHP, em sua versão mais recente.
* Oferecer condições ao participante de aperfeiçoar suas habilidades por meio da criação de aplicações simplificadas e práticas.
* Fortalecer o uso das boas práticas durante a programação.

## Público Alvo
* Desenvolvedores
* Analistas de Sistemas
* Engenheiros de Software
* Gerentes de Projeto
* Estudantes

## Custo
> Apenas 02 kg de alimentos POR AULA

## Local
Rua Rio Tinto, 152, Santa Mônica, Feira de Santana - Ba. CEP 44050-250.

## Data e Horário
- Início: 22/08/2015
- Término: 10/10/2015 (previsto)
- Horário: 13h00 às 17h00 (4h/sábado)
- Carga Horária: 30h

## Conteúdo (WIP)
Introdução ao PHP
* O que é?
* Como Surgiu?
* Alguns projetos

Preparando o ambiente
* Instalando PHP 5.5 / 5.6
* Utilizando o Servidor Embutido
* SublimeText

Paradigmas de Desenvolvimento
* Programação Orientada a Objetos
* Programação Funcional

PHP Básico
* Tipos Primitivos / Variáveis
* Operadores de Comparação
* Argumentos Condicionais
* Switch / For / Foreach
* Trabalhando com Strings
* Operador Ternário
* Arrays

PHP Orientado a Objetos
* Pensamento Orientado a Objetos
* Primeiros Princípios
* Classes vs Objetos
* Criando classes
* Atributos, Métodos e Assinaturas
* Estendendo classes
* Namespaces
* Modificadores de acesso
* Polimorfismo
* Encapsulamento
* Criando e entendendo interfaces
* Criando classes e métodos abstratos
* Traits

PSRs (1, 2, 3 e 4)
* O que são e para que servem?

Gerenciamento de Dependências
* O que são dependências?
* Trabalhando com Composer e Packagist
* Instalando
* Entendendo o Composer.json
* Baixando dependências
* Entendendo o autoloader
* Composer.lock
* Falando sobre o Packagist
* Submetendo um pacote

Trabalhando com PHP em linha de comando
* O que muda na prática?
* O que consigo fazer
* Criando rotinas

PHP Standard Library (SPL)
* O que é SPL
* Trabalhando com Iterators
* Interfaces
* Exceptions
* Funções
* Classes e Interfaces

Falando sobre banco de dados
* Classes nativas
* MySQL vs MySQLi
* Classe PDO

Caching
* O que é caching?
* Vantagens
* Bytecode cache
* Object cache

Segurança
* Data Filtering
* Sanatization
* SQL Injection

Testes automatizados
* O que são testes?
* Vantagens
* Falando sobre TDD
* Tipos de testes
* Unitários / Aceitação

PHPUnit
* Instalando
* Primeiros passos
* setUp e TearDown
* Criano nosso primeiro teste
* Rodando testes
* Configurando bootstrap
* Cobertura de código

# Introdução ao PHP
## O que é PHP?
O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script [open source](http://git.php.net/) de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.

Por exemplo:

```php
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Exemplo</title>
    </head>
    <body>

        <?php
        echo "Olá, eu sou um script PHP!";
        ?>

    </body>
</html>
```

O código PHP é delimitado pelas [instruções de processamento (tags) de início e fim ```<?php``` e ```?>```](http://php.net/manual/en/language.basic-syntax.phpmode.php) que permitem que você pule para dentro e para forma do "modo PHP".

## História
Criado em 1994 por [Rasmus Lerdof](https://pt.wikipedia.org/wiki/Rasmus_Lerdorf), a primeira encarnação do PHP foi um simples conjunto de binários Common Gateway Interface (CGI) escrito em linguagem de programação C.

Originalmente usado para acompanhamento de visitas para seu currículo online, ele nomeou o conjunto de scripts de "Personal Home Page Tools" mais frequentemente referenciado como "PHP Tools." Ao longo do tempo, mais funcionalidades foram desejadas, e Rasmus reescreveu o PHP Tools, produzindo uma maior e rica implementação.

Em Junho de 1995, Rasmus [liberou](https://groups.google.com/forum/#!msg/comp.infosystems.www.authoring.cgi/PyJ25gZ6z7A/M9FkTUVDfcwJ) o código fonte do PHP Tools para o público, o que permitiu que desenvolvedores usassem da forma como desejassem. Isso permitiu - e encorajou - usuários a fornecerem correções para bugs no código, e em geral, aperfeiçoá-lo.

Leia mais:
* [História do PHP (PT BR)](http://php.net/manual/pt_BR/history.php.php)
* [PHP Museum](http://museum.php.net/)
* [Video: PHP Development History 2014](https://www.youtube.com/watch?v=ULjUgdxNaHg)

# PHP Básico
## Escapando o HTML
Quando o PHP interpreta um arquivo, ele procura pelas **tags de abertura** e **fechamento**, as quais indicam para o PHP começar e parar de interpretar o código entre elas. Interpretar desta maneira permite ao PHP ser embutido em todos os tipos de documentos, já que tudo, fora o par de tags de abertura e fechamento é ignorado pelo interpretador do PHP. Na maioria das vezes você verá o PHP embutido em documentos HTML como neste exemplo.

```php
<p>Isto vai ser ignorado.</p>
<?php echo 'Enquanto isto vai ser interpretado.'; ?>
<p>Isto também vai ser ignorado.</p>
```

Existem diferentes maneiras de abrir e fechar um bloco de instruções PHP.

```php
<?php
    echo 'Isto é um teste';
?>

<?php echo 'Isto é um teste' ?>

<?= 'Isto é um teste utilizando short echo tag' ?>

<?php echo 'Nós omitimos a última tag de fechamento';
```

> OBS: Não é necessário colocar um ```;``` quando você abre e fecha um bloco de instruções na mesma linha.

Você também pode escapar utilizada expressões condicionais avançadas:

```php
<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>
```

Leia mais:
* http://php.net/manual/en/language.basic-syntax.instruction-separation.php
* http://php.net/manual/en/language.basic-syntax.phpmode.php

## Referências
[php.net - Site oficial do PHP](php.net)
