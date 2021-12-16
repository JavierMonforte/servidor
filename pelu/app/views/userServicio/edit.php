<!doctype html>
<html lang="es">

<head>
    <?php require "app/views/parts/head.php" ?>
    <link rel="stylesheet" href="/app/css/formulario2.css?i=<?= rand(1, 100) ?>">

</head>

<body>

    <?php require "app/views/parts/header.php" ?>

    <main role="main" class="container">
        <div class="starter-template">

            <h1>Servicios por Usuario</h1>

            <form method="post" action="<?= PATH . "userServicio/update/".$userServicio->user_id."/".$userServicio->servicio_id ?>">

                <div class="form-group">
                    <label>Usuario</label>
                    <select name="usuario" id="selectUser" class="form-control">
                        <optgroup>
                            <?php
                            foreach ($users as $key => $value) {
                                $selected = $userServicio->user_id == $value->id ? "selected" : ""; 
                                echo "<option value='$value->id' " . $selected . ">$value->nombre</option>";
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group">
                    <label>Servicio</label>
                    <select name="servicio" id="selectServicio" class="form-control">
                        <optgroup>
                            <?php
                            foreach ($servicio as $key => $value) {
                                $selected = $userServicio->servicio_id == $value->idservicio ? "selected" : ""; 
                                echo "<option value='$value->idservicio' " . $selected . ">$value->servicio</option>";
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        </form>
        </div>

    </main><!-- /.container -->
    <?php require "app/views/parts/footer.php" ?>


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>