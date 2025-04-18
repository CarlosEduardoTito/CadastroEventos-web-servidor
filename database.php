<?php
session_start();

function getDB() {
    static $conn;
    if ($conn === null) {
        $host = 'localhost';
        $dbname = 'cadastroeventos'; 
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
    return $conn;
}
