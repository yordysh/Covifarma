<?php
error_reporting(E_ALL ^ E_NOTICE);

if ($_POST['Buscar']) {
    $xlista = $_POST['category'];
    if ($xlista == "zona") {
        include 'zonaArea.php';
    } else {
        if ($xlista == "infra") {
            include 'infraestructura.php';
        }
    }
}
