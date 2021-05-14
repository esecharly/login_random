<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar</title>

    <?php
        require_once '../app/config.php';
        require_once '../app/dependencias.php';
    ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-around py-4">
            <div class="col-sm-4 text-center">
                <?php
                    session_start();
                    if (isset($_SESSION['id_session'])) {
                ?>

                    <script>
                        swal('','El ID de su Sesion es: <?php echo $_SESSION['id_session'] ?>','success');
                    </script>

                <?php
                    } else {
                ?>    
                    <script>
                        swal('','No Tienes Sesion','error');
                    </script>
                <?php
                    }
                ?>

                <a href="../index.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
    

    
</body>
</html>