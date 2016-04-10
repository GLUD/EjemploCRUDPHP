<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Vista/estilo.css">
    <title>Lista de posts</title>
    </head>
    <body>
        <h1>Lista de Posts</h1>
        <?php foreach ($posts as $post): ?>
        <div class="post">
            <h3><?php echo $post[1] ?></h3>
            <p> <?php echo $post[2] ?></p>  
            <a class="b" href="./Controlador/borrar.php/?id=<?php echo $post[0]?>">Borrar</a>
	    <div class="ah">
	      <p class="a2">Actualizar</p>
	      
	      <div class="act">
		<form class="ac" action="./Controlador/actControlador.php?id=<?php echo $post[0]?>" method="post">     
		    Titulo: <input type="text" name="titulo"/></br>
		    Mensaje: <input type="text" name="mensaje"/></br>                
		    <input type="submit" name="submit" value="Enviar" /> 
		</form>
	      </div>
	   </div>
        </div>        
        <?php endforeach; ?>
        <div id="nuevo">
            <h3>Nuevo post</h3>
            <form action="./Controlador/nuevo.php" method="post">                
                Titulo: <input type="text" name="titulo"/></br>
                Mensaje: <input type="text" name="mensaje"/></br>                
                <input type="submit" name="submit" value="Enviar" /> 
            </form>
        </div>        
    </body>
</html>