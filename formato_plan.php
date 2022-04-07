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
                                    <li><a href="registro_kits.php" class="link-dark rounded">Naturea Kits</a></li>
                                    <li><a href="registro_planes.php" class="link-dark rounded nav-link active">Planes Naturea</a></li>
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

                            <div class="col-lg-12 d-flex flex-wrap justify-content-start  p-4">

                                <div class="col-lg-12 text-center fw-bold bg-green border--dashboard">
                                    <h2 class="fw-bold fs-3 py-3">Plan de bienestar</h2>
                                </div>

                                <div class="col-lg-12 card shadow mt-3 border--dashboard">

                                    <div class="col-lg-12 d-flex flex-wrap">
                                        <div class="form-group col-lg-3 border-2 border">
                                            <label for="nombre" class="fw-bold fs-6">Fecha (Hoy)</label>
                                            <?php  date_default_timezone_set("America/Mexico_City");
                                                $fecha_actual =date("Y-m-d H:i:s");
                                            ?>
                                            <h6><?php echo $fecha_actual?></h6>
                                        </div>


                                        <div class="form-group col-lg-6 border-2 border">
                                            <p class="fw-bold m-0 p-0">Nombre</p>
                                            <h6><?php echo $producto['nombre'];?></h6>
                                        </div>
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">ID doTERRA</p>
                                            <h6><?php echo $producto['id_doterra']?></h6>
                                        </div>
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Fecha</p>
                                            <h6><?php echo $fecha_actual ?></h6>
                                        </div>
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Edad</p>
                                            <h6><?php echo $producto['edad']?></h6>
                                        </div>

                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Sexo</p>
                                            <h6><?php echo $producto['sexo']?></h6>
                                        </div>
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Estatura</p>
                                            <h6><?php echo $producto['estatura']?></h6>
                                        </div>
                            
                                  
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Peso</p>
                                            <h6><?php echo $producto['peso'];?>Kg</h6>
                                        </div>
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">whatsApp</p>
                                            <h6><?php echo $producto['telefono']?></h6>
                                        </div>
                        
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Ciudad y pais</p>
                                            <h6><?php echo $producto['ciudad']?></h6>
                                        </div>

                                        
                                        <!-- <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Estado</p>
                                            <h6><?php echo $producto['estado']?></h6>
                                        </div> -->

                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Correo</p>
                                            <h6><?php echo $producto['email']?></h6>
                                        </div>

                                
                                        <div class="form-group col-lg-3 border-2 border">
                                            <p class="fw-bold m-0 p-0">Lider</p>
                                            <h6><?php echo $producto['nombre_lider']?></h6>
                                        </div>

                                  
                                    </div>

                                    <!-- PADECIMIENTOS -->
                                    <div class="col-lg-12 d-flex">
                                        <div class="col-lg-6 p-3">

                                            <label for="nombre" class="fw-bold fs-6">Padecimientos</label>
                                            <?php 
                                            
                                            include 'conexion.php';
                                            
                                            $id_usuario = $_GET["id"];
                                            
                                            $sql="SELECT  tb_usuario.id_usuario, relacion.id_padecimiento, padecimiento
                                            FROM ((tb_usuario
                                            INNER JOIN relacion ON tb_usuario.id_usuario = relacion.id_usuario)
                                            INNER JOIN tb_padecimiento ON relacion.id_padecimiento = tb_padecimiento.id_padecimiento)
                                            WHERE tb_usuario.id_usuario = $id_usuario;";
                                            
                                            $sentencia = $pdo->prepare($sql);
                                            $sentencia->execute();
                                            $resultado = $sentencia->fetchAll();

                                            ?>

                                          

                                        </div>
                                        

                                    </div>
                                    <div class="col-12 d-flex flex-wrap">


<?php foreach($resultado as $padecimiento):?>

<div class="col-6 border">
    <?php echo $padecimiento['padecimiento']?>
</div>

<?php endforeach ?>

</div>
                                </div>

                                <div class="col-lg-12 text-center fw-bold bg-green border--dashboard mt-5 mb-3">
                                    <h2 class="fw-bold fs-3 py-3">Programa basico</h2>
                                </div>


                                <div class="card shadow border--dashboard">
                                    <!-- Programa basico -->

                                    <!-- COMPLEMENTOS -->
                                    <div class="col-lg-12 d-flex flex-wrap">
                                        <div class="col-lg-4 p-3">
                                            <h6 class="fw-bold">1er mes</h6>

                                            <div class="col-lg-12 bg-green">
                                                Fecha
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-3">
                                            <h6 class="fw-bold">2do mes</h6>
                                            <div class="col-lg-12 bg-green">
                                                Fecha
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-3">
                                            <h6 class="fw-bold">3er mes</h6>

                                            <div class="col-lg-12 bg-green">
                                                Fecha
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-3">
                                            <h6 class="fw-bold">Complemento</h6>

                                            <div class="col-lg-12 bg-green">
                                                Fecha
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-3">
                                            <h6 class="fw-bold">Complemento</h6>
                                            <div class="col-lg-12 bg-green">
                                                Fecha
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 p-3">
                                            <h6 class="fw-bold">Complemento</h6>

                                            <div class="col-lg-12 bg-green">
                                                Fecha
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                            <div class="col-lg-12 d-flex">
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                                <div class="border col-lg-4">Lorem, ipsum.</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>




                                <div class="col-lg-12 card shadow border--dashboard mt-5 p-3">
                                    <div class="col-lg-12 bg-green ">
                                        <h6 class="fw-bold py-3">Usar diariamente los aceites del family kit </h6>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                    </div>

                                    <div class="col-lg-12 mt-5 bg-green">
                                        <h6 class="fw-bold py-3">Beneficios</h6>


                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                        <div class="border col-lg-12">Lorem, ipsum.</div>
                                    </div>

                                    <div class="col-lg-12 mt-5  d-flex">
                                        <div class="col-lg-6 p-3">
                                            <p>Lider:</p>
                                            <p class="border-bottom border-2"></p>
                                        </div>
                                        <div class="col-lg-6 p-3">
                                            <p>Teléfono:</p>
                                            <p class="border-bottom border-2"></p>
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