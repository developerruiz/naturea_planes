<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u838276928_dbnatureamx', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}