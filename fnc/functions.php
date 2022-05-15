<?php

function scanFolder($path)
{
    $d = dir($path);
    if (is_dir($d->path)) {
        if ($dh = opendir($d->path)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != 'index.php' && $file != 'new.php' && $file != 'fnc' && $file != 'assets' && $file != '.') {
                    if (is_dir($file)) {
                        echo "<img src='../uploads/folder.svg' style='width: 20px; height: 20px;'>\n" . '<a href=' . $file  . '>' . $file . '</a>' . '<br>';
                    } else {
                        echo "<img src='../uploads/files.svg' style='width: 20px; height: 20px;'>\n" . '<a href=' . $file  . '>' . $file . '</a>' . '<br>';
                    }
                }
            }
            closedir($dh);
        }
    }
}

function formatFilesize($file)
{
    if (filesize($file) >= 1073741824) {
        echo round(filesize($file) / 1073741824, 2) . 'gb' . '<br>';
    } elseif (filesize($file) >= 1048576) {
        echo round(filesize($file) / 1048576, 2) . 'mb' . '<br>';
    } elseif (filesize($file) >= 1024) {
        echo round(filesize($file) / 1024, 2) . 'kb' . '<br>';
    } elseif (filesize($file) > 1) {
        echo filesize($file) . 'b' . '<br>';
    } elseif (filesize($file) == 1) {
        echo filesize($file) . 'b' . '<br>';
    } else {
        echo 'файл нулевого размера';
    }
}

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

function new_file($path)
{
    if ($_SERVER['REQUEST_METHOD'] && isset($_POST['new_file'])) {
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'] . $path, '');
        header("Location: {$_SERVER['REQUEST_URI']}");
    }
}

function new_folder($name)
{
    if ($_SERVER['REQUEST_METHOD'] && isset($_POST['new_folder'])) {
        mkdir($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'] . $name);
        $text = file_get_contents('fnc/scan.txt', FALSE, NULL, 0);
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'] . $name . '/index.php', $text);
        header("Location: {$_SERVER['REQUEST_URI']}");
    }
}

function helloDate()
{
    $hourAssign = date("H");
    if (($hourAssign >= 0) && ($hourAssign < 6))
        print("Доброй ночи!");
    elseif (($hourAssign >= 12) && ($hourAssign < 18))
        print("Добрый день!");
    elseif (($hourAssign >= 18) && ($hourAssign < 24))
        print("Добрый вечер!");
    else {
        print("Доброе утро!");
    }
}
