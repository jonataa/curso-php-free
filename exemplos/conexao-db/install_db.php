<?php
// $dsn = 'mysql:host=127.0.0.1;dbname=loja', 'root', 'mysqlpwd'
$dsn = 'sqlite:database.sq3';
$db = new PDO($dsn);

$db->exec('DROP TABLE produtos');
$db->exec('CREATE TABLE produtos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome VARCHAR(100),
    preco REAL,
    imagem VARCHAR(255))');

$db->exec("INSERT INTO produtos (nome, preco, imagem)
           VALUES ('XBOX 360', 4000, '/imgs/xbox.jpg'),
                  ('TV 50\"', 3000, 'http://www.clickgratis.com.br/fotos-imagens/t-v/aHR0cDovL2V2ZW50c2J5ZmFidWxvdXMuY29tL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDEzLzA5L3NhbXN1bmctdHYtZnJvbnQuanBn.jpg'),
                  ('Livro SOLID', 49.9, 'http://cdn.shopify.com/s/files/1/0155/7645/products/oo-solid-sumario-featured_large.png?v=1430310678'),
                  ('Microsystem 500W', 550.9, 'http://www.valdarmoveis.com.br/comprar/produtos/fotos900/20749.jpg')");

$stmt = $db->query("SELECT * FROM produtos");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
