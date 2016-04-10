<?php
    
    require_once '../Modelo/modelo.php';
    $idb = $_GET['id'];
    $titulo = $_POST['titulo'];
    $mensa = $_POST['mensaje'];   
    update($idb, $titulo, $mensa);
    $posts = get_post();
    header('Location: ../index.php');
?>
