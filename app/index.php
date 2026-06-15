<?php
$host = 'postgres_db';
$port = '5432';
$dbname = 'relatorios';
$user = 'postgres';
$pass = 'senha_da_nasa';

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conectado ao PostgreSQL com sucesso!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

$host = 'mysql_db';
$port = '3306';
$dbname = 'pedidos';
$user = 'root';
$pass = 'senha_da_nasa';

try {
    $pdo = new PDO(
       "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
       $user,
       $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conectado ao MySQL com sucesso!";
} catch (PDOException $e) {
      die("Erro na conexão: " . $e->getMessage());
}