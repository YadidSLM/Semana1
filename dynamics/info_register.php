<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletos</title>
</head>
<body>
    <?php
        $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "") ? $_POST['nombre'] : "No especifico";
        $apellido = (isset($_POST['apellido']) && $_POST["apellido"] != "") ? $_POST['apellido'] : "No especifico";
        $age = (isset($_POST['age']) && $_POST["age"] != "") ? $_POST['age'] : "No especifico";
        $direccion = (isset($_POST['address']) && $_POST["address"] != "") ? $_POST['address'] : "No especifico";
        $numBoletos = (isset($_POST['numBoletos']) && $_POST["numBoletos"] != "") ? $_POST['numBoletos'] : "No especifico";
        $boletoType = (isset($_POST['boletoType']) && $_POST["boletoType"] != "") ? $_POST['boletoType'] : "No especifico";

        echo $nombre . "<br/>" . $apellido . "<br/>" . $age . "<br/>". $direccion . "<br/>" . $numBoletos . "<br/>". $boletoType;
    ?>
    
    <table border="1" align="center" cellpadding="25px">
        <thead>
            <tr>
                <th colspan="4"><h1>Six Flags<h1></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td><?php echo $age; ?></td>
                <td rowspan="3">
                    <?php
                        switch ($boletoType)
                        {
                            case "Sencillo":
                                echo '<img src="../statics/sencillez.jpeg" alt="Sencillez" width="500">';
                                break;
                            case "Normal":
                                echo '<img src="../statics/norm.jpg" alt="Normal" width="500">';
                                break;
                            case "Flash pass":
                                echo '<img src="../statics/flashPass.webp" alt="Flash pass" width="500">';
                                break;
                            case "Comidas incluidas":
                                echo '<img src="../statics/hambre.jpg" alt="Comidas incluidas" width="500">';
                                break;
                            case "Premium":
                                echo '<img src="../statics/prem.png" alt="Premium" width="500">';
                                break;
                        }   
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo $direccion; ?></td>
                <td>
                    <?php
                        if($numBoletos <= 0 || $numBoletos > 15)
                        {
                            echo 'Cantidad no disponible. Puede solicitar de 1 a 15 boletos';
                            $numBoletos = 0;
                        }
                        else
                        {
                            echo "<strong>Numero de boletos:</strong><br/>".$numBoletos;
                        }
                    ?>
                </td>
                <td><?php echo $boletoType; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <?php
                        switch ($boletoType)
                        {
                            case "Sencillo":
                                echo '<h4>"Puedes subir a todos por 2 horas"</h4>';
                                break;
                            case "Normal":
                                echo '<h4>"Normal no sinifica no divertido"</h4>';
                                break;
                            case "Flash pass":
                                echo '<h4>"¡No esperes en filas!"</h4>';
                                break;
                            case "Comidas incluidas":
                                echo '<h4>"Come a lo largo de tu estancia en el buffet de comidas del día"</h4>';
                                break;
                            case "Premium":
                                echo '<h4>"Ten acceso a todos nuestro servicios por todo el día"</h4>';
                                break;
                        }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>