<?php 
    include 'conexion.php';

    $sql = "SELECT * FROM tb_padecimiento";
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
    <link rel="stylesheet" href="js/sidebars.js">
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

            <?php include 'complementos/slidemenu.php'?>

            <main class="col-md-9 ms-sm-auto col-lg-10 ">
                <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
                <?php include 'complementos/header-dashboard.php'?>

                <div class="mb-3 mt-5">
                    <!-- <label for="customRange3" class="form-label"></label> -->
                </div>

                <div class="card border--dashboard shadow p-4">
                    <table class="table-sm">
                        <h2 class="fs-4 fw-bold">Informacion del cliente</h2>
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                                <th scope="col">Padecimiento</th>
                                <!-- <th scope="col">SKU</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Beneficio</th>
                                <th scope="col">Uso</th> -->
                            </tr>
                        </thead>

                        <?php foreach($resultado as $producto):?>

                        <tr>
                        <td><?php echo $producto['id_padecimiento']; ?></td>
                            <!-- <td><img src="img/aceite.png" alt="" style="width:25px;"></td> -->
                            <td><?php echo $producto['padecimiento']; ?></td>
                            <!-- <td><?php echo $producto['producto']; ?></td>
                            <td><?php echo $producto['beneficio']; ?></td>
                            <td><a href="<?php echo $producto['uso']; ?>" target="_blank"><?php echo $producto['uso']; ?></a></td> -->

                            <!-- <td>
                                <a href="formato_plan.php?id=<?php echo $producto['id_usuario'];?>" class="">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                </a>
                            </td> -->
                        </tr>

                        <?php endforeach ?>
                    </table>
                </div>
            </main>
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