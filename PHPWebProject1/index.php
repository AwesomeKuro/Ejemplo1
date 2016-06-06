<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <?php
    $link = mysqli_connect("sql201.byetcluster.com", "b24_18248699", "NyanKat123!");
    mysqli_select_db($link, "b24_18248699_mibasededatos");
    $tildes =mysqli_query($link,"SET NAMES 'utf8'"); //Para que se muestren las tildes
    mysqli_query($link, "INSERT INTO agenda VALUES ('Pedro2', 'Gómez Gómez', 'C/ Buenaventura 54', '699887766', 35, 1.98)");
    $result = mysqli_query($link, "SELECT * FROM agenda");

    while($extraido = mysqli_fetch_array($result)){
        if ($extraido !=NULL) {
            echo('- Nombre: '.$extraido['nombre'].'<br/>');
            echo('- Apellidos: '.$extraido['apellidos'].'<br/>');
            echo('- Dirección: '.$extraido['direccion'].'<br/>');
            echo('- Teléfono: '.$extraido['telefono'].'<br/>');
            echo('- Edad: '.$extraido['edad'].'<br/>');
        }
    }
    mysqli_free_result($result);
    mysqli_close($link);
    echo('holi');
    ?>
</body>
</html>