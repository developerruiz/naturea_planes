<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db_natureaplanes', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>