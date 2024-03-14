<?php
include "../common/utils.php";
include "../common/config.php";
include "../common/mysql.php";

// Conexion a la base de datos
$connection = Connect($config['database']);

// Consulta
$sql = "select * from usuarios order by nombre asc";

// Ejecución de la consulta
$rows = ExecuteQuery($sql, $connection);

?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-left">
            <h2 class="mt-5">
                Nueva foto
            </h2>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-left">
            <form action="./admin/actions/new.act.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="author-id" class="form-label">Autor</label>
                        <select name="author_id" id="author_id">
                            <?php
                            foreach ($rows as $row) {
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Fichero</label>
                    <input type="file" class="form-control" id="fichero" name="fichero">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Texto</label>
                    <textarea class="form-control" id="text" name="text"></textarea>
                </div>
                    <div class="mb-3">
                        <label for="enabled" class="form-label">Activado </label>
                        <input type="checkbox" class="form-check-input" id="enabled" name="enabled">
                    </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>

        </div>
    </div>
</div>
