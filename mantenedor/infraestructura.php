<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container g-4 mt-100 row">
            <div class="row g-4 top-div">
                <center><label class="title">ZONAS/ÁREAS</label></center>
            </div>
            <div class="main">
                <form method="post">

                    <!-- Text input -->
                    <div class="form-outline mb-4">

                        <input type="text" id="form6Example3" class="form-control" name="codigo" />
                        <label class="form-label">Código</label>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" name="nombreArea">
                        <label class="form-label">Nombre de área</label>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" name="fecha" />
                        <label class="form-label">Fecha</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id=" form6Example5" class="form-control" name="version" />
                        <label class="form-label">Version</label>
                    </div>

                    <!-- Submit button -->
                    <input type="submit" name="insert" class="btn btn-primary" value="Guardar">
                </form>
                <div class="table-responsive " style="overflow: scroll;height: 600px; margin-top:100px;">
                    <table id="tbalmacen" class="table table-sm mb-3">
                        <thead>
                            <tr>
                                <th class="thtitulo" scope="col">CODIGO</th>
                                <th class="thtitulo" scope="col">NOMBRE DE ACCESORIO</th>
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
                                        <td> <a href="mantenedor/editar.php?id=<?php echo $lista->id; ?>" class="btn btn-success" name="editar"><i class="icon-edit"></i></a> </td>
                                        <td> <a href="mostrar.php?id=<?php echo $lista->id; ?>" class="btn btn-danger" name="borrar"><i class="icon-trash"></i></a> </td>

                                    </tr>
                                <?php
                                endforeach;
                                ?>
                            <?php
                                // }
                            } else { ?>
                                <tr>
                                    <td colspan="7">No se encontro lista...</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>