<?php

// Carregar as credenciais do banco de dados
$hostname = "sql303.epizy.com";
$database = "epiz_31682586_sysrifa";
$user = "epiz_31682586";
$password = "o9s5dpLAO2";

try {
    $pdo = new PDO('mysql:host='.$hostname. ';dbname='.$database, $user, $password);
    $pdo ->setAttribue(PDO::ATTR_ERRMODE, POD::ERRMODE_EXCEPTION);
    echo 'Conexão com o banco de dados '.$database.', foi realizado com sucesso!';
} catch (PDOException $e) {
    echo 'Erro: '.$e->getMessage();
    
}
