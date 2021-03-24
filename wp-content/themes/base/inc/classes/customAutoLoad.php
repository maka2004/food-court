<?php

function customAutoLoad() {
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        if ( stripos($file, '.php') !== false ) {
            $content = file_get_contents(__DIR__ . '/' . $file);
            if ( stripos($content, 'cla' . 'ss') !== false ) { // trick for autoload file
                    include_once __DIR__ . '/' . $file;
            }
        }
    }
}

// регистрируем загрузчик
spl_autoload_register('customAutoLoad');