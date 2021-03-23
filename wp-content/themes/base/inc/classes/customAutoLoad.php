<?php

function customAutoLoad() {
//    include_once($filename);
//    echo "-------------------------";
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        if ( stripos($file, '.php') !== false && $file != 'customAutoLoad.php') {
            $content = file_get_contents(__DIR__ . '/' . $file);
            if ( stripos($content, 'class') !== false ) {
//                echo $file . '<br>';
//                echo $content . '<br>';
                    include_once __DIR__ . '/' . $file;
            }
        }
    }
//    print_r($files); die();
//    file_get_contents();
}

// регистрируем загрузчик
spl_autoload_register('customAutoLoad');