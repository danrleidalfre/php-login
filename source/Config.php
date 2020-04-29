<?php
define("SITE", [
    "name" => "Login",
    "desc" => "Página de login com Facebook, Google e E-mail",
    "domain" => "localhost",
    "locale" => "pt_BR",
    "root" => "https://localhost/Server/login/"
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

define("SOCIAL", [
    "facebook_page" => "danrleidalfre",
    "facebook_author" => "danrleidalfre",
    "facebook_appId" => "1150801045099669",
    "twitter_creator" => "@danrleidalfre",
    "twitter_site" => "@danrleidalfre"
]);

define("MAIL", [
    "host" => "br976.hostgator.com.br",
    "port" => "587",
    "user" => "danrlei@dalfre.com",
    "passwd" => "",
    "from_name" => "Danrlei Dal Fré",
    "from_email" => "danrlei@dalfre.com"
]);

define("FACEBOOK_LOGIN", [
    "clientId" => "1150801045099669",
    "clientSecret" => "5d0ef46699c210ec561f1c53b0ce8054",
    "redirectUri" => SITE['root'] . "/facebook",
    "graphApiVersion" => "v4.0"
]);

define("GOOGLE_LOGIN", [
    "clientId" => "852905684935-fii2fv3o0vbakri3dlojphvmq08f84ku.apps.googleusercontent.com",
    "clientSecret" => "fV3wamHcjlZDGp0Tujfcw-8C",
    "redirectUri" => SITE['root'] . "/google"
]);