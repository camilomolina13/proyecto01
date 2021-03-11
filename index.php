<!DOCTYPE html>
<html lang = "es">
<head>
    <title>Proyecto Heroku</title>
    <meta charset = "UTF-8" />
    <link rel = "stylesheet" content = "text/css" href = "css/estilos.css"/>
    <link rel = "stylesheet" content = "text/css" href = "css/normalize.css"/>
</head>
    <body>
        <div id = "envoltura">
        <header>
            <h1>Programaci&oacute;n Web</h1>
        </header>
        <div id = "main">
                <p>
                    En este curso aprender&aacute; a programar p&aacute;ginas web usando git.

                    <?php 
                        $curso = "Construcción de elementos de software 2";
                        echo "<br/> <br/> ESTAS EN EL CURSO: $curso."   
                    ?>
                </p>
        </div>


        </div>
    </body>
</html>