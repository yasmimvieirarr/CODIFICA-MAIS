<?php

spl_autoload_register(function (string $className) {
    $caminhoArquivo = __DIR__ . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});
