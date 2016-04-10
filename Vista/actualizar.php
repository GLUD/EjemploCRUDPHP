<?php
    $idb = $_GET['id'];
?>
<html>
    <head>
        <title>Actualizar post</title>
    </head>
    <body>
        <form action="actControlador.php" method="post">
            Id del post<input type="text" name="id" value="<?php echo $idb?>"/></br>
            Titulo: <input type="text" name="titulo"/></br>
            Mensaje: <input type="text" name="mensaje"/></br>                
            <input type="submit" name="submit" value="Enviar" /> 
        </form>
    </body>
</html>