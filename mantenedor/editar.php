<?php
require_once("DataBaseA.php");
$conexion = new DataBase();
$dats = $conexion->Conectar();
// if (isset($_GET['editar'])) {
//     $id = $_GET['editar'];
//     $consulta = "SELECT * FROM zonaAreas WHERE id='$id'";
//     $stm = $dats->prepare("SELECT * FROM zonaAreas WHERE id='$id';");

//     $stm->execute();
//     $datos = $stm->fetch(PDO::FETCH_OBJ);
//     $codigo = trim($_POST['codigo']);
//     $nombreArea = trim($_POST['nombreArea']);
//     return $datos;
// }

$id = $_GET['id'];
// $query = $dats->prepare("SELECT codigo,nombreArea FROM zonaAreas WHERE id = :id;");
$query = $dats->prepare("SELECT codigo,nombreArea FROM zonaAreas WHERE id = ?;");
$query->execute([$id]);
// $query->execute(['id' => $id]);
$row = $query->fetch(PDO::FETCH_OBJ);
// print_r($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="../js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script type="text/javascript" src="../js/bootstrap5.bundel.min.js"></script>
    <link rel="STYLESHEET" type="text/css" href="../fonts/style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <script src="../js/jquery-ui-autocompletar.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="../js/sweetalert2@11.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

</head>

<body>

    <header>
    </header>
    <section>
        <div class="contenedormap g-4 row">
            <div class="row g-4 top-div">
                <center><label class="titulos">EDITAR ZONAS/ÁREAS</label></center>
            </div>
            <div class="main">
                <form method="POST">


                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" />
                        <input type="text" id="form6Example3" class="form-control" name="codigo" value="<?php echo $row->codigo; ?>" />
                        <label class="form-label" for="form6Example3">Código</label>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" name="nombreArea" value="<?php echo $row->nombreArea; ?>">
                        <label class="form-label" for="form6Example3">Nombre de área</label>
                    </div>


                    <!-- Submit button -->
                    <input type="submit" name="editar" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <!-- <div class="table-responsive " style="overflow: scroll;height: 600px; margin-top:300px;">
                <table id="tbalmacen" class="table table-sm mb-3">
                    <thead>
                        <tr>
                            <th class="thtitulo" scope="col">CODIGO</th>
                            <th class="thtitulo" scope="col">NOMBRE DE AREA</th>
                            <th class="thtitulo" scope="col">FECHA</th>
                            <th class="thtitulo" scope="col">VERSION</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data)) {
                            // foreach ($data as $lista) {  
                        ?>
                            <?php foreach ($data as $lista) : ?>
                                <tr>
                                    <td><?php echo $lista->codigo ?></td>
                                    <td><?php echo $lista->nombreArea ?></td>
                                    <td><?php echo $lista->fecha ?></td>
                                    <td><?php echo $lista->version ?></td>
                                    <td> <a class="btn btn-success">Editar</a> </td>
                                    <td> <a class="btn btn-danger">Borrrar</a> </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        <?php
                            // }
                        } else { ?>
                            <tr>
                                <td colspan="7">No member(s) found...</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div> -->

        </div>
    </section>
</body>
<script src="js/jsalmacen.js"></script>

</html>
<?php

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $nombreArea = $_POST['nombreArea'];
    $consulta = $dats->prepare("UPDATE  zonaAreas SET codigo=?, nombreArea=? WHERE id= ?;");

    $stm = $consulta->execute([$codigo, $nombreArea, $id]);
    header('Location:mostrar.php');
}


?>