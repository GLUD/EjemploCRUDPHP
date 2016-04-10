<?php
    require_once '../Modelo/modelo.php';
    $titulo = $_POST['titulo'];
    $mensa = $_POST['mensaje'];
    new_post($titulo, $mensa);
    $posts = get_post();    
    header('Location: ../index.php');

?>