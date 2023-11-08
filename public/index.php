<?php

// include __DIR__ . "/../src/App/functions.php";

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

$app = include __DIR__ . '/../src/App/bootstrap.php';

$app->run();

// dd($app);