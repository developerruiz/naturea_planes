<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u838276928_prueba_planes', 'u838276928_dev_prueba', '~v=6Nbl;uT3*');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>