<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir Archivos</title>
    </head>
    <body>
        <?php
        require_once 'clases/Leer.php';
        require_once 'clases/SubirArchivos.php';

        $subir = new SubirArchivos("archivos");
        
        $subir->setNombre(Leer::post("nombre"));
        $subir->setAccion(Leer::post("opcion"));
        $subir->subir();
        ?>
    </body>
</html>