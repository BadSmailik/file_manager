<?php
$d = dir(__DIR__);
if (is_dir($d->path)) {
    if ($dh = opendir($d->path)) {
        while (($file = readdir($dh)) !== false) {
            if (is_dir($file)) {
                echo "папка:\n" . '<a href=' . $file  . '>' . $file . '</a>' . '<br>';
            } else {
                echo "файл:\n" . '<a href=' . $file  . '>' . $file . '</a>' . '<br>';
            }
        }
        closedir($dh);
    }
}
