<?php 
  include 'conexion.php';
 
  $id_usuario = $_GET["id"];
  
  $sql="SELECT * FROM tb_usuario WHERE id_usuario = '$id_usuario'";
  
  $sentencia = $pdo->prepare($sql);
  $sentencia->execute();
  $resultado = $sentencia->fetchAll();

  date_default_timezone_set("America/Mexico_City");
  $fecha_actual =date("Y-m-d");

//   PRIMER MES USO BASICO
           
$sql_basico1 = "SELECT DISTINCT tb_relacion_producto_padecimiento.id_producto, producto.producto, producto.SKU, producto.beneficio, producto.pdf_link, relacion.id_usuario, tb_relacion_producto_padecimiento.id_mes, tb_relacion_producto_padecimiento.uso
FROM tb_relacion_producto_padecimiento  
INNER JOIN producto ON producto.id_producto = tb_relacion_producto_padecimiento.id_producto 
INNER JOIN relacion ON relacion.id_padecimiento = tb_relacion_producto_padecimiento.id_padecimiento

WHERE relacion.id_usuario = '$id_usuario'
AND tb_relacion_producto_padecimiento.id_mes = 1
AND tb_relacion_producto_padecimiento.uso = 1
ORDER BY tb_relacion_producto_padecimiento.id_producto; "; 

$consulta = $pdo->prepare($sql_basico1);
$consulta->execute();
$uso_basico1 = $consulta->fetchAll();

//   PRIMER SEGUNDO USO BASICO

$sql_basico2 = "SELECT DISTINCT tb_relacion_producto_padecimiento.id_producto, producto.producto, producto.SKU, producto.beneficio, producto.pdf_link, relacion.id_usuario, tb_relacion_producto_padecimiento.id_mes, tb_relacion_producto_padecimiento.uso
FROM tb_relacion_producto_padecimiento  
INNER JOIN producto ON producto.id_producto = tb_relacion_producto_padecimiento.id_producto 
INNER JOIN relacion ON relacion.id_padecimiento = tb_relacion_producto_padecimiento.id_padecimiento

WHERE relacion.id_usuario = '$id_usuario'
AND tb_relacion_producto_padecimiento.id_mes = 2
AND tb_relacion_producto_padecimiento.uso = 1
ORDER BY tb_relacion_producto_padecimiento.id_producto;"; 

$consulta_domes = $pdo->prepare($sql_basico2);
$consulta_domes->execute();
$uso_basico2 = $consulta_domes->fetchAll();

//   PRIMER TERCER MES USO BASICO

$sql_basico3 = "SELECT DISTINCT tb_relacion_producto_padecimiento.id_producto, producto.producto, producto.SKU, producto.beneficio, producto.pdf_link, relacion.id_usuario, tb_relacion_producto_padecimiento.id_mes, tb_relacion_producto_padecimiento.uso
FROM tb_relacion_producto_padecimiento  
INNER JOIN producto ON producto.id_producto = tb_relacion_producto_padecimiento.id_producto 
INNER JOIN relacion ON relacion.id_padecimiento = tb_relacion_producto_padecimiento.id_padecimiento

WHERE relacion.id_usuario = '$id_usuario'
AND tb_relacion_producto_padecimiento.id_mes = 3
AND tb_relacion_producto_padecimiento.uso = 1
ORDER BY tb_relacion_producto_padecimiento.id_producto;"; 

$consulta_tercer = $pdo->prepare($sql_basico3);
$consulta_tercer->execute();
$uso_basico3 = $consulta_tercer->fetchAll();



// USO DIARIO BOTIQUIN


$sql_usoDiario1 = "SELECT DISTINCT tb_relacion_producto_padecimiento.id_producto, producto.producto, producto.SKU, producto.beneficio, producto.pdf_link, relacion.id_usuario, tb_relacion_producto_padecimiento.id_mes, tb_relacion_producto_padecimiento.uso
FROM tb_relacion_producto_padecimiento  
INNER JOIN producto ON producto.id_producto = tb_relacion_producto_padecimiento.id_producto 
INNER JOIN relacion ON relacion.id_padecimiento = tb_relacion_producto_padecimiento.id_padecimiento

WHERE relacion.id_usuario = '$id_usuario'
AND tb_relacion_producto_padecimiento.uso = 3
ORDER BY tb_relacion_producto_padecimiento.id_producto;"; 

$consulta_usodiario = $pdo->prepare($sql_usoDiario1);
$consulta_usodiario->execute();
$usodiario1 = $consulta_usodiario->fetchAll();



// USO DIARIO COMPLEMENTARIO


$sql_usocomplementario = "SELECT DISTINCT tb_relacion_producto_padecimiento.id_producto, producto.producto, producto.SKU, producto.beneficio, producto.pdf_link, relacion.id_usuario, tb_relacion_producto_padecimiento.id_mes, tb_relacion_producto_padecimiento.uso
FROM tb_relacion_producto_padecimiento  
INNER JOIN producto ON producto.id_producto = tb_relacion_producto_padecimiento.id_producto 
INNER JOIN relacion ON relacion.id_padecimiento = tb_relacion_producto_padecimiento.id_padecimiento

WHERE relacion.id_usuario = '$id_usuario'
AND tb_relacion_producto_padecimiento.uso = 2
ORDER BY tb_relacion_producto_padecimiento.id_producto;"; 

$consulta_complementario = $pdo->prepare($sql_usocomplementario);
$consulta_complementario->execute();
$uso_complementario = $consulta_complementario->fetchAll();



// BENEFICIOS

$sql_beneficios ="SELECT DISTINCT producto.beneficio
FROM tb_relacion_producto_padecimiento  
INNER JOIN producto ON producto.id_producto = tb_relacion_producto_padecimiento.id_producto 
INNER JOIN relacion ON relacion.id_padecimiento = tb_relacion_producto_padecimiento.id_padecimiento

WHERE relacion.id_usuario = '$id_usuario'
AND tb_relacion_producto_padecimiento.uso = 2
ORDER BY tb_relacion_producto_padecimiento.id_producto;";

$consulta_beneficio = $pdo->prepare($sql_beneficios);
$consulta_beneficio->execute();
$beneficios = $consulta_beneficio->fetchAll();


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

<body class="">

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
                                    <li><a href="registro_kits.php" class="link-dark rounded">Naturea Kits</a></li>
                                    <li><a href="registro_planes.php" class="link-dark rounded nav-link active">Planes
                                            Naturea</a></li>
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

                <div class="d-flex justify-content-between mb-4">
                    <h2 class="fs-4 fw-bold">Lista productos</h2>
                    <div class="d-flex">
                        <div>
                            <a href="excel.php">
                                <button class="btn btn-success shadow"><i class="fa-solid fa-file-excel"></i> Descargar
                                    excel </button>
                            </a>
                        </div>

                        <div class="ms-3">
                            <a href="./dashboard/views/pdf.php?id=<?php echo $producto['id_usuario'];?>" class=""" target="_blank">
                                <button class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i> Ver
                                    PDF</button>
                            </a>
                        </div>
                    </div>

                </div>


                <div class="mt-5 card shadow" style="padding-bottom: 200px">
                    <table class="">
                        <form action="procesos/registra_prod.php" method="POST" onsubmit="return validar();" class=""
                            enctype="multipart/form-data">

                            <div class="col-lg-12 d-flex flex-wrap justify-content-start  p-4">



                                <div class="col-lg-12 d-flex border--dashboard p-4">
                                    <div class="col-lg-3">
                                        <img src="img/logo-planbienestar.png" alt="" class="w-75">
                                    </div>
                                    <div class="col-lg-9 d-flex flex-wrap">



                                        <div class="col-lg-12 d-flex justify-content-center mb-3">
                                            <div
                                                class="col-lg-8 text-center fw-bold bg-blue border--dashboard rounded-pill">
                                                <h2 class="fs-1 pt-3 fuente-antro color-white">Datos Personales</h2>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-5 d-flex">
                                            <p class="m-0 p-0 color-blue">Nombre:</p>
                                            <p class="ms-3 m-0 p-0"><?php echo $producto['nombre'];?></p>
                                        </div>
                                        <div class="form-group col-lg-4 d-flex">
                                            <p class="m-0 p-0 color-blue fs-6">ID doTERRA:</p>
                                            <p class="ms-3 m-0 p-0"><?php echo $producto['id_doterra']?></p>
                                        </div>
                                        <div class="form-group col-lg-3 d-flex">
                                            <p class="m-0 p-0 color-blue fs-6">Fecha:</p>
                                            <p class="ms-3 m-0 p-0"><?php echo $fecha_actual ?></p>
                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-between">

                                            <div class="form-group col-lg-2 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Edad:</p>
                                                <h6 class="ms-3"><?php echo $producto['edad']?></h6>
                                            </div>
                                            <div class="form-group col-lg-2 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Sexo:</p>
                                                <h6 class="ms-3"><?php echo $producto['sexo']?></h6>
                                            </div>
                                            <div class="form-group col-lg-3 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Estatura:</p>
                                                <h6 class="ms-3"><?php echo $producto['estatura']?></h6>
                                            </div>
                                            <div class="form-group col-lg-2 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Peso:</p>
                                                <h6 class="ms-3"><?php echo $producto['peso'];?>Kg</h6>
                                            </div>
                                            <div class="form-group col-lg-3 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">whatsApp:</p>
                                                <h6 class="ms-3"><?php echo $producto['telefono']?></h6>
                                            </div>

                                        </div>


                                        <div class="col-lg-12 d-flex justify-content-between">
                                            <div class="form-group col-lg-3 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Ciudad y pais:</p>
                                                <h6 class="ms-3"><?php echo $producto['ciudad']?></h6>
                                            </div>
                                            <div class="form-group col-lg-3 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Correo:</p>
                                                <h6 class="ms-3"><?php echo $producto['email']?></h6>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <div class="form-group col-lg-3 d-flex">
                                                <p class="m-0 p-0 color-blue fs-6">Lider:</p>
                                                <h6 class="ms-3"><?php echo $producto['nombre_lider']?></h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="col-lg-10 text-center fw-bold bg-blue border--dashboard rounded-pill ">
                                        <h2 class="fs-1 pt-3 fuente-antro color-white">Principales Preocupaciones de
                                            Salud
                                        </h2>
                                    </div>
                                </div>

                                <div class="col-lg-12 border--dashboard p-4">

                                    <div class="col-12 d-flex flex-wrap">
                                        <!-- PADECIMIENTOS -->

                                        <?php 
                                            include 'conexion.php';
                                            
                                            $id_usuario = $_GET["id"];
                                            
                                            $sql="SELECT  (@row_number:=@row_number + 1) AS num, tb_usuario.id_usuario, relacion.id_padecimiento, padecimiento
                                            FROM ((tb_usuario
                                            INNER JOIN relacion ON tb_usuario.id_usuario = relacion.id_usuario)
                                            INNER JOIN tb_padecimiento ON relacion.id_padecimiento = tb_padecimiento.id_padecimiento),
                                            (SELECT @row_number:=0) AS t
                                            WHERE tb_usuario.id_usuario = $id_usuario;
                                            ORDER BY num;
                                            ";
                                            
                                            $sentencia = $pdo->prepare($sql);
                                            $sentencia->execute();
                                            $resultado = $sentencia->fetchAll();

                                            ?>

                                        <?php foreach($resultado as $padecimiento):?>

                                        <div class="col-4">

                                            <span class=" fs-6 color-blue">
                                                <?php echo $padecimiento['num']?>
                                            </span>
                                            <span class="fs-6">
                                                <?php echo $padecimiento['padecimiento']?>
                                            </span>

                                        </div>

                                        <?php endforeach ?>

                                    </div>
                                </div>

                                <div class="d-flex justify-content-center col-12">
                                    <div
                                        class="col-lg-10 text-center fw-bold bg-blue border--dashboard rounded-pill mt-2">
                                        <h2 class="fs-1 pt-3 fuente-antro color-white">Uso basico
                                        </h2>
                                    </div>
                                </div>

                                <div class="col-lg-12 d-flex flex-wrap mt-3 h-100">

                                    <div class="col-lg-4 h-100 ">
                                        <div class="col-lg-12 d-flex justify-content-center ">
                                            <div class="col-lg-10 text-center bg-skyblue rounded-pill p-2">
                                                1er Mes
                                            </div>
                                        </div>

                                        <div class=" d-flex flex-wrap col-12 h-100 border">
                                            <div class=" d-flex col-12">
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Producto</p>
                                                </div>
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Beneficio</p>
                                                </div>
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Uso</p>
                                                </div>
                                            </div>

                                            <?php foreach($uso_basico1 as $primer_mes_basico):?>


                                            <div class="col-4 border p-1">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $primer_mes_basico['producto']?>
                                                </h6>
                                            </div>

                                            <div class="col-4 border p-1">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $primer_mes_basico['beneficio']?>
                                                </h6>
                                            </div>

                                            <div
                                                class="col-4 border p-1  d-flex align-items-center justify-content-center">
                                                <a href="<?php echo $primer_mes_basico['pdf_link']?>" target="_blank"><i
                                                        class="fa-solid fa-file-pdf fs-2 color-blue"></i></a>

                                            </div>
                                            <?php endforeach ?>
                                        </div>

                                    </div>

                                    <div class="col-lg-4 h-100">

                                        <div class="col-lg-12 border-end border-start d-flex justify-content-center">
                                            <div class="col-lg-10 text-center  bg-skyblue rounded-pill p-2">
                                                2do Mes
                                            </div>
                                        </div>


                                        <div class="  d-flex flex-wrap col-12 h-100 border">
                                            <div class=" d-flex col-12">
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Producto</p>
                                                </div>
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Beneficio</p>
                                                </div>
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Uso</p>
                                                </div>
                                            </div>

                                            <?php foreach($uso_basico2 as $segundo_mes):?>


                                            <div class="col-4 border p-1">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $segundo_mes['producto']?>
                                                </h6>
                                            </div>

                                            <div class="col-4 border p-1">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $segundo_mes['beneficio']?>
                                                </h6>
                                            </div>

                                            <div
                                                class="col-4 border p-1  d-flex align-items-center justify-content-center">
                                                <a href="<?php echo $segundo_mes['pdf_link']?>" target="_blank"><i
                                                        class="fa-solid fa-file-pdf fs-2 color-blue"></i></a>

                                            </div>
                                            <?php endforeach ?>
                                        </div>



                                    </div>


                                    <div class="col-lg-4 h-100">
                                        <div class="col-lg-12 d-flex justify-content-center ">
                                            <div
                                                class="col-lg-10 text-center border-right border-start bg-skyblue rounded-pill p-2">
                                                3er Mes
                                            </div>
                                        </div>


                                        <div class="  d-flex flex-wrap col-12 h-100 border">
                                            <div class=" d-flex col-12">
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Producto</p>
                                                </div>
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Beneficio</p>
                                                </div>
                                                <div class="col-4  border text-center">
                                                    <p class="color-purple m-0 p-0">Uso</p>
                                                </div>
                                            </div>

                                            <?php foreach($uso_basico3 as $tercer_mes):?>
                                            <div class="col-4 border p-1 ">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $tercer_mes['producto']?>
                                                </h6>
                                            </div>

                                            <div class="col-4 border p-1 ">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $tercer_mes['beneficio']?>
                                                </h6>
                                            </div>

                                            <div
                                                class="col-4 border p-1  d-flex align-items-center justify-content-center">
                                                <a href="<?php echo $tercer_mes['pdf_link']?>" target="_blank"><i
                                                        class="fa-solid fa-file-pdf fs-2 color-blue"></i></a>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-12 border--dashboard mt-5 container">

                                <div class="d-flex justify-content-center col-12">
                                    <div
                                        class="col-lg-10 text-center fw-bold bg-blue border--dashboard rounded-pill mt-3">
                                        <h2 class="fs-1 pt-3 fuente-antro color-white">Uso diario botiquin
                                        </h2>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center col-12">
                                    <div
                                        class="col-lg-8 text-center fw-bold bg-skyblue border--dashboard rounded-pill mt-3">
                                        <p class=" fs-6 fw-normal pt-3 color-blue">Es importante contar con estos
                                            productos
                                            durante los 3 primeros meses
                                        </p>
                                    </div>
                                </div>



                                <div class="d-flex mt-3">

                                    <div class="col-lg-12">

                                        <div class="border d-flex flex-wrap col-12">
                                            <div class="col-4 border text-center">
                                                <p class="color-purple m-0 p-0">Producto</p>
                                            </div>
                                            <div class="col-4 border text-center">
                                                <p class="color-purple m-0 p-0">Beneficio</p>
                                            </div>
                                            <div class="col-4 border text-center">
                                                <p class="color-purple m-0 p-0">Uso</p>
                                            </div>
                                            <?php foreach($usodiario1 as $uso_diario):?>


                                            <div class="col-4 border d-flex align-items-center justify-content-center">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $uso_diario['producto']?>
                                                </h6>
                                            </div>

                                            <div class="col-4 border d-flex align-items-center justify-content-center">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $uso_diario['beneficio']?>
                                                </h6>
                                            </div>

                                            <div
                                                class="col-4 border d-flex align-items-center justify-content-center p-1">
                                                <a href=" <?php echo $uso_diario['pdf_link']?>"><i
                                                        class="fa-solid fa-file-pdf fs-2 color-blue"></i></a>

                                            </div>


                                            <?php endforeach ?>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </form>

                    </table>
                </div>


                <div class="mt-5 card shadow" style="padding-bottom: 200px">
                    <table class="">
                        <form action="procesos/registra_prod.php" method="POST" onsubmit="return validar();" class=""
                            enctype="multipart/form-data">

                            <div class="col-lg-12 d-flex flex-wrap justify-content-start p-4">



                                <div class="col-lg-12 d-flex border--dashboard px-4">
                                    <div class="col-lg-3">
                                        <img src="img/logo-planbienestar.png" alt="" class="w-75">
                                    </div>
                                    <div class="col-lg-9 d-flex flex-wrap">



                                        <div class="col-lg-12 text-center">


                                            <p class="fs-2 pt-3 color-purple"><?php echo $producto['nombre']?></p>

                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-center">
                                            <div
                                                class="col-lg-12 text-center fw-bold bg-blue border--dashboard rounded-pill ">
                                                <h3 class="fs-2 pt-3 fuente-antro color-white">Beneficios
                                                </h3>
                                            </div>
                                        </div>




                                        <div class="col-lg-12 my-3">



                                            <ul class="d-flex flex-wrap">
                                                <?php foreach($beneficios as $beneficio):?>
                                                <li class="col-lg-6 pe-3">
                                                    <p class="p-0 m-1" style="font-size: 10px;">
                                                        <?php echo $beneficio['beneficio']?>
                                                    </p>
                                                </li>
                                                <?php endforeach ?>
                                            </ul>



                                        </div>

                                    </div>
                                </div>


                                <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="col-lg-10 text-center fw-bold bg-blue border--dashboard rounded-pill ">
                                        <h2 class="fs-1 pt-3 fuente-antro color-white">Uso complementario

                                        </h2>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center col-12">
                                    <div
                                        class="col-lg-8 text-center fw-bold bg-skyblue border--dashboard rounded-pill mt-3">
                                        <p class=" fs-6 fw-normal pt-3 color-blue">Es importante contar con estos
                                            productos durante los 3 primeros meses
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-12 border--dashboard container">


                                <div class="d-flex">

                                    <div class="col-lg-12">

                                        <div class="border d-flex flex-wrap col-12">
                                            <div class="col-4 border text-center">
                                                <p class="color-purple m-0 p-0">Producto</p>
                                            </div>
                                            <div class="col-4 border text-center">
                                                <p class="color-purple m-0 p-0">Beneficio</p>
                                            </div>
                                            <div class="col-4 border text-center">
                                                <p class="color-purple m-0 p-0">Uso</p>
                                            </div>
                                            <?php foreach($uso_complementario as $complementario):?>


                                            <div class="col-4 border d-flex align-items-center justify-content-center">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $complementario['producto']?>
                                                </h6>
                                            </div>

                                            <div class="col-4 border d-flex align-items-center justify-content-center">
                                                <h6 style="font-size: 12px;">
                                                    <?php echo $complementario['beneficio']?>
                                                </h6>
                                            </div>

                                            <div
                                                class="col-4 border d-flex align-items-center justify-content-center p-1">
                                                <a href=" <?php echo $complementario['pdf_link']?>"><i
                                                        class="fa-solid fa-file-pdf fs-2 color-blue"></i></a>

                                            </div>


                                            <?php endforeach ?>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-evenly mt-3">
                                        <div class="col-lg-4 d-flex  bg-skyblue  rounded-pill text-center">

                                            <div
                                                class="col-lg-12 text-center fw-bold bg-skyblue border--dashboard rounded-pill 0">
                                                <p class="m-0 p-2 fs-6 fw-normal  color-blue">METODOS DE APLICACIÓN
                                                </p>
                                            </div>

                                        </div>

                                        <div class="col-lg-4 d-flex  bg-skyblue  rounded-pill text-center">

                                            <div
                                                class="col-lg-12 text-center fw-bold bg-skyblue border--dashboard rounded-pill 0">
                                                <p class="m-0 p-1 fs-6 fw-normal  color-blue">SENSIBILIDAD DE LA PIEL
                                                </p>
                                            </div>

                                        </div>



                                    </div>
                                    <div class="container">
                                        <div class="col-lg-12 d-flex justify-content-evenly">
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled mt-2">
                                                    <li>
                                                        <p class="m-0 p-0" style="font-size: 12px;"> A = Puede ser usado
                                                            Aromaticamente </p>
                                                    </li>
                                                    <li>
                                                        <p class="m-0 p-0" style="font-size: 12px;"> T = Puede ser usado
                                                            Topicamente</p>
                                                    </li>
                                                    <li>
                                                        <p class="m-0 p-0" style="font-size: 12px;"> P = Puede ser usado
                                                            topicamente sin diluir (PURO)</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="list-unstyled mt-2">
                                                    <li>
                                                        <p class="m-0 p-0" style="font-size: 12px;"> A = Puede ser usado
                                                            Aromaticamente </p>
                                                    </li>
                                                    <li>
                                                        <p class="m-0 p-0" style="font-size: 12px;">T = Puede ser usado
                                                            Topicamente</p>
                                                    </li>
                                                    <li>
                                                        <p class="m-0 p-0" style="font-size: 12px;">P = Puede ser usado
                                                            topicamente sin diluir (PURO)</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="container">
                                        <div class="col-lg-12 d-flex bg-purple  rounded-pill text-center">

                                            <div
                                                class="col-lg-12 text-center fw-bold bg-purple border--dashboard rounded-pill 0">
                                                <p class="m-0 p-1 fw-normal  color-skyblue" style="font-size: 14px;">El
                                                    Aceite de Coco,
                                                    Corporal de doTERRA está diseñado para mezclarse con tus aceites
                                                    esenciales favoritos. Excepcionalmente
                                                    hidratante para una piel suave y flexible
                                                </p>
                                            </div>



                                        </div>
                                        <div class="mt-2" style="border-bottom: 2px solid #499eb2 ">
                                            <p class="text-center text-muted" style="font-size: 10px;">
                                                * Estas declaraciones no han sido evaluadas por la Administración de
                                                Alimentos y Medicamentos (FDA, por sus siglas en inglés). Estos
                                                productos no
                                                tiene el propósito de diagnosticar, tratar,
                                                curar o evitar ninguna enfermedad.
                                            </p>
                                        </div>

                                        <div class="text-center">
                                            <p class="m-0 p-0 text-muted" style="font-size: 9px;">Lizeth Baldemar</p>
                                            <p class="m-0 p-0 text-muted" style="font-size: 9px;">Diamante Presidencial,
                                                Fundadora de Mexico</p>
                                            <p class="m-0 p-0 text-muted" style="font-size: 9px;">11 años Usando y
                                                disfrutanto los aceites esenciales de doTERRA</p>
                                            <p class="m-0 p-0 text-muted" style="font-size: 9px;">WhatsApp 6564183692
                                            </p>
                                        </div>
                                    </div>
                                </div>
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