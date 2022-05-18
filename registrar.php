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


  $insertar_usuario = "INSERT INTO tb_usuario SET nombre ='$nombre', telefono= '$telefono', sexo = '$sexo', edad = '$edad', estatura= '$estatura', email = '$email', id_doterra = '$id_doterra', contacto = '$inscripcion', ciudad = '$ciudad', estado = '$estado', nombre_lider='$nombre_lider', dispuesto_descripcion = '$dispuesto_texto', nombre_familiar = '$familiar', dispuesto_pregunta='$dispuesto', peso = '$peso'";
  mysqli_query($conexion, $insertar_usuario);

  $id_usuario= mysqli_insert_id($conexion);

  foreach ( $_POST['padecimiento'] as $id_padecimiento ){    

  $insertar_categoria = "INSERT INTO relacion  SET id_usuario='$id_usuario', id_padecimiento='$id_padecimiento'";
  mysqli_query($conexion, $insertar_categoria);


    if ( $insertar_categoria) {
      echo "<script>alert('Registro exitoso');</script><script>window.location='formulario_planes.php'</script>";  
    }else {
      echo "<script>alert('error de registro :/');window,history.go(-1);</script>";
    }

  }



