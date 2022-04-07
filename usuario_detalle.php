<?php 
 include 'conexion.php';
 
$id_usuario = $_GET["id"];

$sql="SELECT * FROM tb_usuario WHERE id_usuario = '$id_usuario'";

$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TODO:CREAR LA IMAGEN DE PORTADA -->
    <!-- <meta property="og:image" content="img/portada-link-compartir.jpg" /> -->
    <title>FrasanGroup</title>
    <meta property="og:url" content="http://www.frasangroup.com" />
    <meta property="og:description" content="" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta property="og:site_name" content="www.frasancolors.com" />
    <meta property="fb:admins" content="ID de Facebook " />
    <meta property="article:published_time" content="2022-02-10T10:25:00+01:00" />
    <meta property="article:modified_time" content="2022-02-10T10:25:47+01:00" />
    <meta property="og:type" content="website" />
    <meta name="author" content="Ivan Ruiz Rodriguez || Front-end Developer" />
    <meta name="revised" content="10/02/2022" />


    <meta itemprop="name" content="Frasan Colors">
    <meta itemprop="description" content="">
    <!-- TODO:CREAR LA IMAGEN DE PORTADA -->
    <!-- <meta itemprop="image" content="img/portada-link-compartir.jpg"> -->

    <meta http-equiv="cookie" content="clave=valor; expires=Friday, 22-02-04 12:25:59 GMT;" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style_dashboard.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="css/sidebars.css">


    <!-- TODO:CREAR LA IMAGEN DE FAVICON -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- FONTAWENSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- GOOGLE ANALITYCS -->
</head>

<body class="bg-gray-100">

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="list-unstyled ps-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link " aria-current="page">
                                <i class="fa-solid fa-house-chimney"></i>
                                Home
                            </a>
                        </li>

                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded" data-bs-toggle="collapse"
                                data-bs-target="#home-collapse" aria-expanded="true">
                                Registros
                            </button>

                            <div class="collapse show" id="home-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Naturea Kits</a></li>
                                    <li><a href="#" class="link-dark rounded nav-link active">Planes Naturea</a></li>
                                    <!-- <li><a href="#" class="link-dark rounded">Reports</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                    <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                    <li><a href="#" class="link-dark rounded">Annually</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Orders
                            </button>
                            <div class="collapse" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New</a></li>
                                    <li><a href="#" class="link-dark rounded">Processed</a></li>
                                    <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                    <li><a href="#" class="link-dark rounded">Returned</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Account
                            </button>
                            <div class="collapse" id="account-collapse" style="">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
            <?php foreach($resultado as $producto):?>
            <main class="col-md-9 ms-sm-auto col-lg-10">

                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
                <?php include 'complementos/header-dashboard.php'?>



                <div class="mt-5">
                    <table class="">
                        <form action="procesos/registra_prod.php" method="POST" onsubmit="return validar();" class=""
                            enctype="multipart/form-data">

                            <div class="col-lg-12 d-flex flex-wrap justify-content-between">
                                <div class="col-lg-3 pe-2 mb-5 ">
                                    <div
                                        class="form-row bg-body shadow p-3 border--dashboard text-center h-100 d-flex flex-column align-items justify-content-center">
                                        <h5>Imagen del cliente</h5>
                                        <!-- <img src="data:image/png;base64,<?php echo base64_encode($producto['foto']); ?>"
                                            class="w-100"> -->
                                        <img src="img/foto-usuario.png" alt="" width="150px" height="auto">
                                    </div>
                                </div>

                                <div class="col-lg-9 ps-2 mb-5 ">
                                    <div class="form-row bg-body shadow p-3 border--dashboard">
                                        <h5>Información del Usuario</h5>

                                        <div class="col-lg-12 d-flex flex-wrap">
                                            <div class="col-lg-6 p-2">
                                                <label for="nombre">Nombre del usuario</label>
                                                <input type="text" name="nombre" class="col-12 form-control"
                                                    value="<?php echo $producto['nombre']; ?>">


                                            </div>
                                            <div class="col-lg-6 p-2">
                                                <label for="categoria">Teléfono</label>
                                                <input type="text" value="<?php echo $producto['telefono']; ?>"
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-6 p-2">
                                                <label for="categoria">Sexo</label>
                                                <input type="text" value="<?php echo $producto['sexo']; ?>"
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-6 p-2">
                                                <label for="categoria">edad</label>
                                                <input type="text" value="<?php echo $producto['edad']; ?>"
                                                    class="form-control">
                                            </div>
                                            <div class="col-lg-6 p-2">
                                                <label for="categoria">Estatura</label>
                                                <input type="text" value="<?php echo $producto['estatura']; ?>"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <!-- <p><?php echo $producto['rendimiento']?></p>
                                        <p><?php echo $producto['aplicacion']?></p>
                                        <p><?php echo $producto['colores']?></p>
                                        <p><?php echo $producto['calidad']?></p>
                                        <p><?php echo $producto['poder_cubriente']?></p>
                                        <p><?php echo $producto['secado']?></p>
                                        <p><?php echo $producto['base']?></p> -->
                                    </div>

                                </div>

                            </div>

                            <h2 class="fs-4 fw-bold mt-5">Informacion de contacto</h2>

                            <div class="form-row shadow p-3 mb-5 bg-body border--dashboard d-flex">
                                <div class="col-lg-6">

                                    <div class="col-lg-12 p-2">
                                        <label for="categoria">edad</label>
                                        <input type="text" value="<?php echo $producto['edad']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-12 p-2">
                                        <label for="categoria">edad</label>
                                        <input type="text" value="<?php echo $producto['edad']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-12 p-2">
                                        <label for="categoria">edad</label>
                                        <input type="text" value="<?php echo $producto['edad']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-12 p-2">
                                        <label for="categoria">edad</label>
                                        <input type="text" value="<?php echo $producto['edad']; ?>"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-12 p-2">
                                        <label for="categoria">edad</label>
                                        <input type="text" value="<?php echo $producto['edad']; ?>"
                                            class="form-control">
                                    </div>



                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group p-2">
                                        <label for="secado">Secado al tacto</label>
                                        <input type="text" name="secado" id="secado" class="form-control">
                                    </div>

                                    <div class="form-group p-2">
                                        <label for="base">Base</label>
                                        <input type="text" name="base" id="base" class="form-control">
                                    </div>

                                    <div class="form-group p-2">
                                        <label for="presentacion">Presentación</label>
                                        <input type="text" name="presentacion" id="presentacion" class="form-control">
                                    </div>

                                    <div class="form-group p-2">
                                        <label for="acabado">Acabado</label>
                                        <input type="text" name="acabado" id="acabado" class="form-control">
                                    </div>

                                </div>

                            </div>

                            <h2 class="fs-4 fw-bold mt-5">Documentos</h2>

                            <button type="submit" class="btn btn-primary btn-lg mb-4">Registrar Producto</button>
                </div>

                </form>

                </table>
        </div>
        </main>
        <?php endforeach ?>

    </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="js/dashboard.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

    <script src="js/modal.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/scripts.js"></script>



</body>

</html>