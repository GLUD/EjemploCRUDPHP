<?php
	function open_databaseConnection()
    {
        $dbconn = pg_connect("host=localhost dbname=elBlog user=postgres password=123456")
            or die( "No se pudo conectar: " . pg_last_error());
        return $dbconn;
    }

    function close_database($dbconn)
    {
        pg_close($dbconn) or die("no se pudo cerrar" . pg_last_error);
    }
    
    function new_post($title, $body){
        $dbconn= open_databaseConnection();
        pg_query("INSERT INTO post  (titulo, cuerpo) VALUES ('$title','$body');");  
        close_database($dbconn);
    }

    function get_post(){
        $dbconn = open_databaseConnection();
        $result= pg_query('SELECT * FROM post order by idnoticia') or die('La consulta fallo: ' . pg_last_error);
        $filas=pg_numrows($result); 
        $posts = array(array());
        if ($filas==0) { 
                        echo "No se encontro ningun registro\n"; exit;
                       } 
                        else
                       {    
                        for($cont=0;$cont<$filas;$cont++)
                        { 
                         $posts[$cont][0]=pg_result($result,$cont,0);
                         $posts[$cont][1]=pg_result($result,$cont,1);
                         $posts[$cont][2]=pg_result($result,$cont,2);
                        }
                       }
        close_database($dbconn);
        return $posts;
    }

    function delete($id){
        $dbconn= open_databaseConnection();
        pg_query("DELETE FROM post WHERE idnoticia=$id;");  
        close_database($dbconn);
    }
    function update($id, $t, $m){
        $dbconn= open_databaseConnection();
        pg_query("UPDATE post SET titulo='$t', cuerpo='$m' WHERE idnoticia=$id;");  
    }
?>
