<?php
/* * Ei file-ta apnar main file.
 * __DIR__ er mane holo "ei file-tar nijer folder-er location".
 * Ete PHP ar kokhono location niye confused hobe na.
*/
include_once __DIR__ . "/config/config.php";

session_start();
if( isset($_SESSION['user'])=="" ){
    include_once __DIR__ . "/layout/header_lib.php";
    include_once __DIR__ . "/script/install/install.php";
    
    $install=new install();
    $step=$install->step_install();
    
    if($step==2) {
        // Ekhaneo amra full path diye file take load korchi
        include_once __DIR__ . '/page/login/login.php';
    }
    else {
        header("Location: install_system.php");
    }
}
else{
    header("Location: index.php");
}
?>
