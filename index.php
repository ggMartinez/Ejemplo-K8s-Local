<?php


    $conexion = new mysqli(
        getenv("IP_DB"),
        getenv("USER_DB"),
        getenv("PASSWORD_DB"),
        getenv("NAME_DB")
    );

    echo "Linda demo. Cada vez que cargue esta pagina, inserta un registro random en la tabla. <br /><br />";
    $sql = "INSERT INTO dato(dato) VALUES(RAND())";
    echo "Estos son los datos que hay en la tabla: <br />";
    $conexion -> query($sql);

    $sql = "SELECT id,dato FROM dato";

    $filas = $conexion -> query($sql);
    echo "<pre>";
    echo "ID\tDato\n";
    foreach($filas as $fila){
        echo $fila["id"]. "\t" . $fila["dato"]. "\n";
    }
    echo "</pre>";