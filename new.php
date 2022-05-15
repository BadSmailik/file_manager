<?php
$_POST['action'];
switch ($_POST['action']) {
    case 'new_folder':
        require_once "./new_folder.php";
        break;
    case 'new_file':
        require_once "./new_file.php";
        break;
    default:
        # code...
        break;
}