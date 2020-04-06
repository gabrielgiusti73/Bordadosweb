<html>
<body>
  <?php

  $to = "gabrielgiusti@yahoo.com.ar";
  $subject = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $mensaje = $_post["Mensaje"]
  mail($to, $subject, $apellido, $email, $mensaje);
 

</body>
</html>
