<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoVentas e Importadora Kings</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <hr>
                    <form method="post" autocomplete="off">
                        <div class="card-body">
                            <div class= "row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="from-group">
                                        <label for="nombreVehiculo">Nombre de Vehiculo</label>
                                        <input type="text" class="form-control" name="nombreVehiculo" id="nombreVehiculo" required>
                                    </div>

                                    <p>
                                    <div class="from-group">
                                        <label for="oferta">¿De cuánto es tu oferta?</label>
                                        <input type="text" class="form-control" name="oferta" id="oferta" required>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="from-group">
                                        <label for="rivete">¿Tienes Rivete?</label>
                                        <input type="text" class="form-control" name="rivete" id="rivete" required>
                                    </div>
                                    </p>

                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>

    <?php
        include("sendvehi.php");
    ?>
</body>

</html>