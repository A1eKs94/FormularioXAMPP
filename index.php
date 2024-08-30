<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <form id="registroForm" action="#" method="POST">
      <h2>Registro</h2>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="name" maxlength="40" required />

      <label for="apellido">Apellido:</label>
      <input
        type="text"
        id="apellido"
        name="last_name"
        maxlength="40"
        required
      />

      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required />

      <label for="fecha">Fecha de Nacimiento:</label>
      <input type="date" id="fecha" name="date" max="" required />

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required />

      <label for="password_confirm">Repetir Contraseña:</label>
      <input
        type="password"
        id="password_confirm"
        name="password_confirm"
        required
      />

      <input name="send" type="submit" class="btn" value="Registrar" />
    </form>

    <?php
      include("send.php")
    ?>

    <script src="index.js"></script>
  </body>
</html>
