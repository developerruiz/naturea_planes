<?php 
include ("conexion.php");
$registro="SELECT * FROM tb_registro ORDER BY Id DESC" ;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- TODO: HACERNUEVA IMAGEN PARA COMPARTIR dashboard -->
  <!-- <meta property="og:image" content="img/portada-link.jpg" /> -->

  <title>Dashboard Naturea Planes </title>
  <meta property="og:url" content="http://localhost/Planes_Naturea/usrRegistrados.php" />
  <meta property="og:description"
    content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana." />

  <meta name="description"
    content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana." />

  <meta name="keywords" content="" />

  <meta property="og:site_name" content="http://localhost/Planes_Naturea/usrRegistrados.php" />
  <meta property="fb:admins" content="ID de Facebook " />
  <meta property="article:published_time" content="2022-02-17T11:25:00+01:00" />
  <meta property="article:modified_time" content="2022-02-17T11:25:47+01:00" />
  <meta property="og:type" content="website" />
  <meta name="author" content="Ivan Ruiz Rodriguez || Front-end Developer" />
  <meta name="revised" content="17/02/2022" />

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Dashboard Naturea Planes">
  <meta itemprop="description"
    content="Brindamos alternativas para mejorar la salud, con oportunidades de crecimiento y emprendimiento en el negocio de uso y comercialización de aceites esenciales, tips, capacitación, etc. Aportamos una alternativa de bienestar natural basado en el uso de los aceites esenciales, proporcionando salud, paz y tranquilidad a través de una vida más sana.">

  <!-- TODO: HACERNUEVA IMAGEN PARA COMPARTIR dashboard -->
  <!-- <meta itemprop="image" content=""> -->

  <!-- Nos sirve para guardar una cookie. Los datos guardados son clave/valor -->
  <meta http-equiv="cookie" content="clave=valor; expires=Wednesday, 17-02-22 11:25:59 GMT;" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dashboard.css">

  <!-- TODO: IMAGEN DE PORTADA -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

  <!-- FONTAWENSOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- ICONS BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- GOOGLE ANALITYCS -->

</head>

<body>

  <!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header> -->


  <div class="container-fluid sticky">
    
  <div class="row">
    <?php include "complementos/nav.php"?>

      <main class="col-md-9 ms-sm-auto col-lg-10">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Registros Planes Naturea</h1>
          <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div> -->
        </div>

        <!-- <h2>Section title</h2> -->
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>

                <th scope="col">Id Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Estado</th>
                <th scope="col">Municipio</th>
                <th scope="col">Codigo postal</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Solicitud</th>
                <th scope="col">Medio</th>
                <th scope="col">Otro</th>


              </tr>
            </thead>
            <tbody>

              <?php  $resultado = mysqli_query($conexion, $registro);

         while ($row=mysqli_fetch_assoc($resultado)) { ?>
              <tr>

                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['fecha_nacimiento']; ?></td>
                <td><?php echo $row['ciudad']; ?></td>
                <td><?php echo $row['estado']; ?></td>
                <td><?php echo $row['municipio']; ?></td>
                <td><?php echo $row['codigo_postal']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['solicitud']; ?></td>
                <td><?php echo $row['medio']; ?></td>
                <td><?php echo $row['otro']; ?></td>
                <td>
                  <!-- <a href="aprobar_rechazar.php?id=<?php echo $row['id_solicitud'];?>" class="">Ver más</a> -->
                </td>
              </tr>

              <?php } mysqli_free_result($resultado)?>

            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
  </script>

  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/confirmar.js"></script>

  <script>
    setTimeout(() => {
      window.location.reload(true);
    }, 60000);
  </script>


</body>

</html>