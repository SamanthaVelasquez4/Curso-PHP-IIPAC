<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .radio-group, .checkbox-group {
            margin: 10px 0;
        }
        .radio-option, .checkbox-option {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="formulario.php" method="post" enctype="multipart/form-data">
        <!-- Texto simple -->
        <div class="form-group">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre">
            <div class="error" id="errorNombre"></div>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="text" id="email" name="email" required>
            <div class="error" id="errorEmail"></div>
        </div>

        <!-- Contraseña -->
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required minlength="6">
            <div class="error" id="errorPassword"></div>
        </div>

        <!-- Número -->
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="18" max="100">
        </div>

        <!-- Fecha -->
        <div class="form-group">
            <label for="fechaNacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento">
        </div>

        <!-- Select (desplegable) -->
        <div class="form-group">
            <label for="pais">País:</label>
            <select id="pais" name="pais">
                <option value="">Seleccione un país</option>
                <option value="HN">Honduras</option>
                <option value="MX">México</option>
                <option value="ES">España</option>
                <option value="US">Estados Unidos</option>
            </select>
        </div>

        <!-- Radio buttons -->
        <div class="form-group">
            <label>Género:</label>
            <div class="radio-group">
                <div class="radio-option">
                    <input type="radio" id="masculino" name="genero" value="masculino">
                    <label for="masculino">Masculino</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="femenino" name="genero" value="femenino">
                    <label for="femenino">Femenino</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="otro" name="genero" value="otro">
                    <label for="otro">Otro</label>
                </div>
            </div>
        </div>

        <!-- Checkboxes -->
        <div class="form-group">
            <label>Intereses (seleccione al menos uno):</label>
            <div class="checkbox-group">
                <div class="checkbox-option">
                    <input type="checkbox" id="deportes" name="intereses[]" value="deportes">
                    <label for="deportes">Deportes</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="musica" name="intereses[]" value="musica">
                    <label for="musica">Música</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="tecnologia" name="intereses[]" value="tecnologia">
                    <label for="tecnologia">Tecnología</label>
                </div>
            </div>
            <div class="error" id="errorIntereses"></div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4"></textarea>
        </div>

        <!-- Archivo -->
        <div class="form-group">
            <label for="foto">Foto de perfil:</label>
            <input type="file" id="foto" name="foto" accept="image/*">
        </div>

        <!-- Rango -->
        <div class="form-group">
            <label for="satisfaccion">Nivel de satisfacción:</label>
            <input type="range" id="satisfaccion" name="satisfaccion" min="1" max="10" value="5">
            <span id="valorSatisfaccion">5</span>
        </div>

        <!-- Color -->
        <div class="form-group">
            <label for="colorFavorito">Color favorito:</label>
            <input type="color" id="colorFavorito" name="colorFavorito" value="#ff0000">
        </div>

        <button type="submit">Enviar Formulario</button>
    </form>

    <script>
        // Mostrar valor del rango
        document.getElementById('satisfaccion').addEventListener('input', function() {
            document.getElementById('valorSatisfaccion').textContent = this.value;
        });
    </script>
</body>
</html>
