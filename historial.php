<!DOCTYPE html>
<html>
<head>
  <title>Historial de Fallas y Soporte</title>
  <style>
    .historial-fallas {
      background-color: #95A5A6;
      padding: 20px;
      border: 1px solid #333;
    }

    .historial-fallas h2 {
      color: #333;
      margin-bottom: 10px;
    }

    .historial-fallas ul {
      list-style-type: none;
      padding: 0;
    }

    .historial-fallas li {
      margin-bottom: 10px;
    }

    .historial-fallas li strong {
      display: block;
    }

    .historial-fallas form {
      margin-top: 20px;
    }

    .historial-fallas label {
      display: block;
      margin-bottom: 5px;
    }

    .historial-fallas textarea {
      width: 100%;
      height: 100px;
      resize: vertical;
      margin-bottom: 10px;
    }

    .historial-fallas input[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .historial-fallas input[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <section class="historial-fallas">
    <h2>Historial de Fallas y Soporte</h2>
    
    <ul>
      <li>
        <strong>Fecha:</strong> 22 de junio de 2023<br>
        <strong>Descripción:</strong> Problemas de conexión intermitente<br>
        <strong>Estado:</strong> Pendiente
      </li>
      <li>
        <strong>Fecha:</strong> 18 de junio de 2023<br>
        <strong>Descripción:</strong> Corte de servicio<br>
        <strong>Estado:</strong> Resuelto
      </li>
      <li>
        <strong>Fecha:</strong> 10 de junio de 2023<br>
        <strong>Descripción:</strong> Velocidad de Internet lenta<br>
        <strong>Estado:</strong> En progreso
      </li>
    </ul>
    <h3>Formulario de Contacto</h3>

<form action="historial.php" method="POST">
    <label for="mensaje_id">Descripción:</label>
    <textarea id="mensaje_id" name="mensaje_id" required></textarea>
  
    <input type="submit" name="Enviar" value="Enviar">
</form>
    
<?php
    include("conex.php");
    $linkconn = conectar();

    if (isset($_POST['Enviar'])) {
        $mensaje_id = $_POST['mensaje_id'];

        $consulta = "INSERT INTO `mensaje` (`mensaje_id`) VALUES ('$mensaje_id')";

        if (mysqli_query($linkconn, $consulta)) {
            echo "Su registro fue agregado";
        } else {
            echo "Error: " . mysqli_error($linkconn);
        }
    }

    $sql = "SELECT * FROM mensaje";
    $resultado = mysqli_query($linkconn, $sql);

    echo "La cantidad de filas son: " . mysqli_num_rows($resultado);
    echo "<table bgcolor='#AAB7B8'>";
    echo "<tr><td>Fallas Detectadas</td></tr>";

    foreach ($resultado as $fila) {
        $mensaje_id = $fila['mensaje_id'];

        echo "<tr><td>$mensaje_id</td></tr>";
    }

    echo "</table>";
?>
   <section>
    <h2>volver a inicio</h2>
    <p>ver mas: <a href="index.html">volver</a></p>  </section>

</body>
</html>


