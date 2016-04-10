<?php
    require_once '../Modelo/modelo.php';
    $idb = $_GET['id'];
    delete($idb);
    $posts = get_post();
    header('Location: ../../index.php');
?>