<?php
declare(strict_types=1);

session_start();
session_unset();

$path = $_SERVER["HTTP_HOST"];
header("Location: https://${path}/index.php");