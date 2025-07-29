<?php
$alumnos = [
    [
        "id" => 1,
        "nombre" => "Ana Martínez",
        "edad" => 20,
        "carrera" => "Ingeniería en Sistemas",
        "promedio" => 89.5
    ],
    [
        "id" => 2,
        "nombre" => "Carlos López",
        "edad" => 22,
        "carrera" => "Administración de Empresas",
        "promedio" => 85.3
    ],
    [
        "id" => 3,
        "nombre" => "María Gómez",
        "edad" => 21,
        "carrera" => "Psicología",
        "promedio" => 90.2
    ],
    [
        "id" => 4,
        "nombre" => "Luis Torres",
        "edad" => 23,
        "carrera" => "Derecho",
        "promedio" => 78.9
    ],
    [
        "id" => 5,
        "nombre" => "Sofía Hernández",
        "edad" => 20,
        "carrera" => "Arquitectura",
        "promedio" => 92.0
    ],
    [
        "id" => 6,
        "nombre" => "Javier Reyes",
        "edad" => 24,
        "carrera" => "Contaduría Pública",
        "promedio" => 81.7
    ],
    [
        "id" => 7,
        "nombre" => "Daniela Pérez",
        "edad" => 19,
        "carrera" => "Medicina",
        "promedio" => 95.6
    ],
    [
        "id" => 8,
        "nombre" => "Fernando Cruz",
        "edad" => 22,
        "carrera" => "Ingeniería Civil",
        "promedio" => 87.4
    ],
    [
        "id" => 9,
        "nombre" => "Camila Rojas",
        "edad" => 21,
        "carrera" => "Biología",
        "promedio" => 88.8
    ],
    [
        "id" => 10,
        "nombre" => "Andrés Mejía",
        "edad" => 20,
        "carrera" => "Informática",
        "promedio" => 90.0
    ]
];

if(isset($_GET[id])){
    $encontrado = array_find($alumnos, function($alumno){
        if($alumno[id]==$_GET[id]){
            return $alumno;
        }else{
            return null;
        }
    });
}else{
    echo "No viene el id en la url <br>";
}


//var_dump($encontrado);

if($encontrado!=null):
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .detalle-alumno {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .campo {
            margin-bottom: 15px;
        }
        .campo strong {
            display: inline-block;
            width: 120px;
            color: #3498db;
        }
        .volver {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .volver:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Detalle del Alumno</h1>
    <div class="detalle-alumno">
        <div class="campo">
            <strong>Matrícula:</strong> <?php echo $encontrado['id']; ?>
        </div>
        <div class="campo">
            <strong>Nombre:</strong> <?php echo $encontrado['nombre']; ?>
        </div>
        <div class="campo">
            <strong>Edad:</strong> <?php echo $encontrado['edad']; ?> años
        </div>
        <div class="campo">
            <strong>Carrera:</strong> <?php echo $encontrado['carrera']; ?>
        </div>
        <div class="campo">
            <strong>Email:</strong> <?php echo $encontrado['email']; ?>
        </div>
        <div class="campo">
            <strong>Promedio:</strong> <?php echo $encontrado['promedio']; ?>
        </div>
    </div>
    
    <a href="lista_alumnos.php" class="volver">Volver a la lista</a>
</body>
</html>
<?php else: echo "No se encontró el estudiante";endif;?>



