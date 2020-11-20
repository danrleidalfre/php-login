<?php
define("SITE", [
    "name" => "Login",
    "desc" => "Página de login com Facebook, Google e E-mail",
    "domain" => "localhost",
    "locale" => "pt_BR",
    "root" => "https://localhost/php-login/"
]);

if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "login",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

define("MAIL", [
    "host" => "br976.hostgator.com.br",
    "port" => "587",
    "user" => "danrlei@dalfre.com",
    "passwd" => "",
    "from_name" => "Danrlei Dal Fré",
    "from_email" => "danrlei@dalfre.com"
]);