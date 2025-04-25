<?php
$host = 'mysql_db';
$db = 'mydatabase';
$user = 'facsis';
$pass = 'fac123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartera de Clientes</title>
    <!-- Vinculamos Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold" href="#">Samsoft Systems Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./index.php">
            <i class="fas fa-home"></i> Inicio
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-users"></i> Quiénes somos
        </a>
    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenedor principal -->
    <div class="container mt-4">
        <h1 class="text-center">Cartera de Clientes</h1>
        <p class="text-center">Bienvenido a la plataforma de gestión de clientes.</p>

        <!-- Tabla de clientes -->
        <div class="card">
            <div class="card-body">
                <!-- <h5 class="card-title">Clientes Registrados</h5> -->
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Monto</th>
                        </tr>
                    </thead>
                  <tbody>
         <?php
          $consulta=$pdo->query("Select * from clientes");
          if($consulta->rowCount()>0){
            $contar=0;
            while($fila = $consulta->fetch()) {
                $contar++;
        ?>
<tr>  
    <td><?=$contar ?></td>
    <td><?=$fila['cedula'] ?></td>
    <td><?=$fila['nombre'] ?></td>
    <td><?=$fila['monto'] ?></td>
</tr>


         <?php

            }
          }
          
          ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
