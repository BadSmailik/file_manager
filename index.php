<?php
require __DIR__ . '/fnc/functions.php';
scanFolder(__DIR__);
new_file(@$_POST['name']);
new_folder(@$_POST['name']);
var_dump($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/main.css">
</head>

<body>
    <!-- <form action="" method="post" class="form-control" style="max-width: 500px;margin: auto;">
        <div class="mt-2">
            <input type="text" name="name" class="form-control" placeholder="имя">
        </div>
        <div class="mt-2 mb-2 d-flex justify-content-center">
            <button class="btn btn-success" name="new_file" value="new_file">создать файл</button>
            <button class="btn btn-success ms-2" name="new_folder" value="new_folder">создать папку</button>
        </div>
    </form> -->
    <?php require_once './fnc/form.php' ?>
</body>

</html>
<?php


// $d = dir(__DIR__);
// if (is_dir($d->path)) {
//     if ($dh = opendir($d->path)) {
//         while (($file = readdir($dh)) !== false) {
//             if ($file != 'index.php' && $file != 'new.php' && $file != 'fnc' && $file != 'assets' && $file != '.') {
//                 if (is_dir($file)) {
//                     echo "<img src='../uploads/folder.svg' style='width: 20px; height: 20px;'>\n" . '<a href=' . $file  . '>' . $file . '</a>' . '<br>';
//                 } else {
//                     echo "<img src='../uploads/files.svg' style='width: 20px; height: 20px;'>\n" . '<a href=' . $file  . '>' . $file . '</a>' . '<br>';
//                 }
//             }
//         }
//         closedir($dh);
//     }
// }

?>