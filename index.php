<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

echo "pronto pra começar!";

ob_flush();