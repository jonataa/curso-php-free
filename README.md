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

## Popularidade

O PHP sempre foi muito popular entre as [linguagens de programação server-side](https://pt.wikipedia.org/wiki/Linguagem_server-side), hoje, 81% das páginas web utilizam PHP ([w3techs](http://w3techs.com/)). Os websites mais famosos são:

1. Facebook (tem sua própria versão do PHP, chamada de [HHVM](http://hhvm.com/))
2. Wikipedia
3. Baidu
4. Yahoo!
5. Tumblr
6. Flickr
7. Wordpress
8. Mailchimp
9. LAD Bible
10. Birchbox
11. SeatGeek
12. Fotolia
13. Flipkart
14. Digg
15. iStockPhoto

> Fonte: [What are the top 10 websites built with PHP?](http://www.quora.com/What-are-the-top-10-websites-built-with-PHP)

# Preparando o Ambiente

Sempre utilize a última versão estável do PHP por causa do grande número de features e correções que foram adicionados ao longo dos anos. Atualmente estamos na versão [PHP 5.6](http://php.net/downloads.php).

## Instalando no Windows
Faça o download dos arquivos binários (.zip) [nessa página](http://windows.php.net/download/) e descompacte-os na pasta ```c:\php56``` do seu computador. Verifique se nessa pasta existe o arquivo ```c:\php56\php.exe```. Agora, vamos adicionar o PHP à variável de ambiente [PATH](http://www.windows-commandline.com/set-path-command-line/). Digite no [Prompt de Comando](https://pt.wikipedia.org/wiki/Prompt_de_comando) (ou CMD) o comando abaixo e pressione ```ENTER```:

```shell
setx path "%path%;c:\php56"
```

Se você não tem muito domínio com a linha de comando, dê uma olhada [nesse tutorial](https://www.java.com/pt_BR/download/help/path.xml), pois ele mostra como adicionar um caminho à variável de ambiente PATH.

## Instalando no Linux

A melhor maneira de instalar o PHP numa distribuição Linux baseada em Unix é utilizando um [geranciador de pacotes](https://en.wikipedia.org/wiki/List_of_software_package_management_systems#Linux_distributions). Isso vai depender da sua distribuição Linux na qual você está utilizando. No Ubuntu, uma das distribuições mais populares, você irá instalar através do gerenciador de pacote ```apt```. Apenas digite o comando abaixo e [verifique se foi instalado corretamente](#verificando-a-instalação).

```shell
$ sudo apt-get install php5-cli
```
> Não incluir o sinal de cifrão/dollar no comando.


## Instalando no Mac OSX

No sistema operacional Macintosh, o PHP já vem pré-instalado, na maioria das vezes na versão ```5.4```. Antes de instalar, [verifique se você já possui o PHP instalado](#verificando-a-instalação). Se não, a melhor maneira de instalar no Mac OSX é utilizando o gerenciador de pacotes chamado ```Homebrew``` (ou apenas ```Brew```).

> [Site do Homebrew](http://brew.sh/)

Um vez que o ```Homebrew``` foi instalado corretamente, basta digitar o comando a seguir:

```shell
$ brew install php55
```

Agora, verifique se o PHP foi instalado corratamente no [tópico](#verificando-a-instalação) a seguir.

## Verificando a instalação

Para saber se o PHP está instalado corretamente no seu sistema operacional, digite ```php -v``` no CMD (ou Shell, para usuários Linux) e verifique se você obtém uma resposta parecida com essa:

```shell
$ php -v
PHP 5.6.4 (cli) (built: Dec 24 2014 12:05:33)
Copyright (c) 1997-2014 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2014 Zend Technologies
    with Zend OPcache v7.0.4-dev, Copyright (c) 1999-2014, by Zend Technologies
    with Xdebug v2.2.5, Copyright (c) 2002-2014, by Derick Rethans
```

> Não incluir o sinal cifrão/dollar no comando. Esse comando é utilizado para mostrar a versão PHP instalada no seu sistema operacional.

Leia mais:
* [O que significa thread safety quando estou fazendo o download do PHP?](http://php.net/manual/pt_BR/faq.obtaining.php#faq.obtaining.threadsafety)
* [eBook - PHP Pandas - Installation](http://daylerees.com/php-pandas-installation/)
* [PHP The Right Way - Getting Started](http://www.phptherightway.com/#getting_started)

## Editores de Texto

Durante o nosso curso, utilizaremos o [Atom.io](https://atom.io/) como editor de texto para criar nossos scripts PHP. Ele é um editor open source e foi desenvolvido pela equipe do [Github](https://github.com/). Faça [aqui](https://atom.io/) o download do binário e instale no seu computador de acordo com o seu sistema operacional.

![Atom.io Logo](imgs/atom_logo.png)

## Hello, World

Uma vez que nosso [ambiente de desenvolvimento está preparado](#preparando-o-ambiente), iremos executar nosso primeiro script PHP. Existem diversas maneiras de executá-lo, uma delas é via Terminal (ou CMD, no caso do Windows), digite o comando abaixo:

```shell
$ php -r 'echo "Hello World";'
```
> php -r 'code' (Roda um código PHP sem as scripts tags <?php..?>)

Outra maneira, é criando um arquivo ```helloworld.php``` com o seguinte conteúdo:

```php
<?php

echo "Hello World";
```
Para executar esse script no Terminal, digite:

```shell
$ php -f helloworld.php
```

Também é possível executar scripts PHP diretamente do Atom.io, abra o arquivo ```helloworld.php``` no editor e pressione ```ctrl-shift-b```(ou ```cmd-i```, no OSX).

Abrirá uma caixa com o output do script, dessa maneira:

![Running Scripts in Atom.io](imgs/atom_run_script.png)

## Servidor Web

A maneira mais popular de executar os scripts PHP é junto com um servidor web, como [Apache](http://www.apache.org/), [Nginx](http://nginx.org/) ou [Lighttpd](http://www.lighttpd.net/). Mas, o que muitas pessoas não sabem é que o PHP, desde a sua versão ```5.4```, já traz um [servidor web embutido](http://php.net/manual/pt_BR/features.commandline.webserver.php).

Para utilizá-lo, basta digitar o seguinte comando:

```shell
$ php -S localhost:9000
```
Dessa maneira, o PHP irá levantar um servidor web na porta ```9000``` e específicar a pasta atual como o seu [```docroot```](http://www.karelia.com/support/sandvox/help/z/Document_Root.html).

Veja o output abaixo e observe o atual ```Document Root```:

```shell
PHP 5.4.17 Development Server started at Mon Aug 17 16:08:21 2015
Listening on http://localhost:9000
Document root is /Users/jweber/dev/projects/curso-php-free
Press Ctrl-C to quit.
```
Se você quiser forçar um outro caminho como ```docroot```, acrescente ao comando anterior o atributo ```-t```, ficando dessa maneira:

```shell
$ php -S localhost:9000 -t c:\www
```

Agora o output será algo parecido com isso:

```shell
PHP 5.4.17 Development Server started at Mon Aug 17 16:08:21 2015
Listening on http://localhost:9000
Document root is c:\www
Press Ctrl-C to quit.
```

Abra esse link [http://localhost:9000/helloworld.php](http://localhost:9000/exemplos/helloworld.php) no seu navegador e veja o resultado do seu script. Se não, você receberá uma mensagem ```HTTP 404 (page not found)```.

> Lembre-se que o arquivo ```helloworld.php``` deverá estar dentro da pasta ```docroot```, por exemplo: ```c:\www\helloworld.php```

Parabéns! Você acaba de executar seu primeiro script PHP :)

# PHP Básico
Uma vez que estamos aptos a executar os scripts PHP, tanto via CLI (Command-Line Interface) quanto via Servidor Web, a partir de agora daremos início aos estudos de sintaxe básica da linguagem PHP.

## Variáveis
Em PHP, variáveis são palavras que começam com um símbolo de dólar ```$```. Vejamos um exemplo:

```php
<?php

$variavel = 'Hello, World';
$variavel = 3;
$variavel = 1.4;
$variavel = false;
$variavel = 50 == '50'; // true
$variavel = 50 === '50' // false
$variavel = null;
```

PHP é uma [linguagem fracamente tipada](https://pt.wikipedia.org/wiki/Linguagem_tipada), então, você não específica o tipo da variável, apenas atribui um valor à ela. As linguagens com essa característica permitem que você altere os tipos de dados contido em uma variável durante a execução do programa.

O PHP suporta oito [tipos primitivos](http://php.net/manual/pt_BR/language.types.intro.php): ```String```, ```Integer```, ```Boolean```, ```Float```, ```Array```, ```Object```, ```Resource``` e ```NULL```.

## Strings

* Aspas Simples

```php
<?php

echo 'Essa é uma string simples';

echo 'Além disso, você pode embarcar novas linhas
nas strings, esse é um caminho
legal de fazer';

// Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Isso não vai criar \n uma nova linha
echo 'Isso não vai criar \n uma nova linha';

$variavel = 'com';
// Variáveis não funcionam $variavel com as simples
echo 'Variáveis não funcionam $variavel com aspas simples';
```

* Aspas Duplas

```php
<?php

$variavel = 'Legal';
// Variáveis funcionam assim: Legal
echo "Variáveis funcionam assim: $variavel";
```

## Arrays
Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo que relaciona valores para chaves. Este tipo é otimizado de várias maneiras, então você pode usá-lo como um array real, ou uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Como você pode ter outro array PHP como um valor, você pode facilmente simular árvores.

```php
<?php

$lista = array('Foo', 'Bar', 'Fizz', 'Buzz');
$lista = ['Foo', 'Bar', 'Fizz', 'Buzz']; // php >= 5.4
$numeros = [10, "vinte", 30, 40.8, false, null]; // php >= 5.4

var_dump($numeros);

/*
array(6) {
  [0]=>
  int(10)
  [1]=>
  string(5) "vinte"
  [2]=>
  int(30)
  [3]=>
  float(40.8)
  [4]=>
  bool(false)
  [5]=>
  NULL
}
*/
```

A ```chave``` pode ser tanto um [integer](http://php.net/manual/pt_BR/language.types.integer.php) ou uma [string](http://php.net/manual/pt_BR/language.types.string.php). Se a ```chave``` é uma representação padrão de um integer, ele será interpretado assim (por exemplo, "8" será interpretado como 8, enquanto "08" será interpretado como "08"). Os índices do tipo ```float``` serão truncados para ```integer```. Não há diferença entre arrays indexados e associativos em PHP, apenas um tipo de array, que pode ter índices do tipo ```integer``` ou ```string```.

```php
<?php

$arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

echo $arr["somearray"][6];    // 5
echo $arr["somearray"][13];   // 9
echo $arr["somearray"]["a"];  // 42
```

Leia mais:
* [php.net - Arrays](http://php.net/manual/pt_BR/language.types.array.php)

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

> Note que não é necessário colocar um ```;``` quando você abre e fecha um bloco de instruções na mesma linha.

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
