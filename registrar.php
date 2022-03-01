<?php 
  include ('conexion.php');

  
  $nombre                   = $_POST['nombre'];
  $telefono                 = $_POST['telefono'];
  $genero                   = $_POST['genero'];
  $edad                     = $_POST['edad'];
  $peso                     = $_POST['peso'];
  $estatura                 = $_POST['estatura'];
  $email                    = $_POST['correo'];
  $id_doterra               = $_POST['id_doterra'];
  $inscripcion              = $_POST['inscripcion'];
  $ciudad                   = $_POST['ciudad'];
  $estado                   = $_POST['estado'];
  $nombre_lider             = $_POST['nombre_lider'];
  $sintomas                 = $_POST['sintomas'];
  $dispuesto                = $_POST['dispuesto'];
  $dispuesto_texto          = $_POST['dispuesto_texto'];
  $familiar                 =$_POST['familiar'];


//   $destinatario = 'ivanrur95@gmail.com';  

  $insertar = "INSERT INTO tb_registro (nombre, email, fecha_nacimiento, ciudad, estado, municipio, codigo_postal, telefono, solicitud, medio, otro) VALUES
  ('$nombre','$email','$fecha_nacimiento','$ciudad','$estado','$municipio','$codigo_postal','$telefono', '$solicitud', '$medio_enterado', '$otro')";

$resultado = mysqli_query($conexion, $insertar);

  if ($resultado) {
    
    echo "<script>alert('Registro exitoso');</script><script>window.location='registro.php'</script>";   

  }else {
    echo "<script>alert('error de registro');window,history.go(-1);</script>";
  }

//   $header = "Nueva requisicion";
//   $mensajeCompleto = "\nNueva petición de:" . $nombre . "\nTipo de solicitud: " . $tipo_solicitud . "\nDesatalle: " . $descripcion . "\nOficina: " . $oficina;
//   mail($destinatario, $mensajeCompleto, $header);

// if (mail) {
//   echo "<script>alert('se ha enviado un correo de aviso de tu solicitud registrada')</script>";
//   echo "<script> setTimeout(\"location.href='usuario.php'\",1000)</script>";
// }else{
//   echo "<script>alert('error no se pudo enviar el correo');</script>";
// }