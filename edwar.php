
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">  
  <form id="contact" action="server.php" method="post">
    <h3>Validacion de ingreso</h3>
    <h4>Formulario para validar edad de la persona</h4>
    <fieldset>
        <p>Ingrese su edad</p>
      <input name="edad"  type="text">
    </fieldset>

    <fieldset>
      <button name="form" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

  
</body>
</html>
