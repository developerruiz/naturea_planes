<?php
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