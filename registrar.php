<?php 
  include 'conexion2.php';
  
  $nombre                   = $_POST['nombre'];
  $telefono                 = $_POST['telefono'];
  $sexo                     = $_POST['sexo'];
  $edad                     = $_POST['edad'];
  $estatura                 = $_POST['estatura'];
  $email                    = $_POST['correo'];
  $id_doterra               = $_POST['id_doterra'];
  $inscripcion              = $_POST['inscripcion'];
  $estado                   = $_POST['estado'];
  $ciudad                   = $_POST['ciudad'];
  $nombre_lider             = $_POST['nombre_lider'];

  $padecimiento           = '';

  $dispuesto                = $_POST['dispuesto'];
  $dispuesto_texto          = $_POST['dispuesto_texto'];
  $familiar                 = $_POST['familiar'];
  $peso                     = $_POST['peso'];


  define ("DEMO", false);

  $template_file = "./template.php";

  // Enviar correo electronico
  $subject = "simple emails with php";
  
  $swap_var = array(
      "{CUSTOM_URL}" => "http://prueba.natureaplanes.com/formato_plan/`$id_usuario`",
      "{TO_NAME}" => "'$nombre'",  
  );

  $headers = "From: prueba naturea <prueba@planesnaturea.com>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";

  
  $insertar_usuario = "INSERT INTO tb_usuario SET nombre ='$nombre', telefono= '$telefono', sexo = '$sexo', edad = '$edad', estatura= '$estatura', email = '$email', id_doterra = '$id_doterra', contacto = '$inscripcion', ciudad = '$ciudad', estado = '$estado', nombre_lider='$nombre_lider', dispuesto_descripcion = '$dispuesto_texto', nombre_familiar = '$familiar', dispuesto_pregunta='$dispuesto', peso = '$peso'";
  mysqli_query($conexion, $insertar_usuario);

  $id_usuario= mysqli_insert_id($conexion);

  // Create the HTML message
  if (file_exists($template_file)) 
    $message = file_get_contents($template_file);
  else 
    die("unable to locate the tamplate file");
  foreach (array_keys($swap_var) as $key) {
        if (strlen($key) > 2 && trim($key) != "")
        $message = str_replace($key, $swap_var[$key], $message);
  }
 
  echo $message;

  if(DEMO)
  die("<hr />no emails was sent on puropse");

  // Correo electrónico
  mail($email, $subject, $message, $headers);


  foreach ( $_POST['padecimiento'] as $id_padecimiento ){    

  $insertar_categoria = "INSERT INTO relacion  SET id_usuario='$id_usuario', id_padecimiento='$id_padecimiento'";
  mysqli_query($conexion, $insertar_categoria);

    if ( $insertar_categoria) {

      echo "<script>window.location='sendEmail.php'</script>";  

    }else {
      echo "<script>alert('error de registro :/');window,history.go(-1);</script>";
    }

  }