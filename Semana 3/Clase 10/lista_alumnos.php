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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e3f2fd;
        }
        a {
            color: #2980b9;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    
    <table>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno['id']; ?></td>
                <td><?php echo $alumno['nombre']; ?></td>
                <td><?php echo $alumno['carrera']; ?></td>
                <td>
                    <a href="detalle_alumno.php?id=<?php echo $alumno['id']; ?>">
                        Ver Detalles
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>