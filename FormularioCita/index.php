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
                    <h2 class="text-center"><span class="badge rounded-pill text-bg-primary">AutoVentas e Importadora Kings</span></h2>
                    <div class="text-center"><img src="https://scontent.fgua5-1.fna.fbcdn.net/v/t39.30808-1/370542180_1963865160652125_6781098402631700800_n.jpg?stp=dst-jpg_p320x320&_nc_cat=109&ccb=1-7&_nc_sid=754033&_nc_ohc=KZLu6tP3Km8AX-bagQj&_nc_oc=AQnRizrJ-m4DU0hd8EEV0Wn3gIwrTFiluWPNV_CgMZONz-EXEFy8ZApnGrncjwCIrek&_nc_ht=scontent.fgua5-1.fna&oh=00_AfDhpZpabLvwPrO8yNFpP0LbklcCqWwSJZ6fH7sCUmtRvw&oe=652348A8" alt="Cinque Terre" width="125" height="125"></div>
                    <hr>
                    <p><h4 class="text-center"><span class="badge rounded-pill text-bg-info">Solicitud para realizar su cita</span></h4></p>
                    <p class="text-center">Llene con sus datos lo que a continuación se le solicita</p>
                    <form method="post" autocomplete="off">
                        <div class="card-body">
                            <div class= "row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="from-group">
                                        <label for="nombre">Nombre Completo</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                                    </div>

                                    <p>
                                    <div class="from-group">
                                        <label for="correo">Correo electrónico</label>
                                        <input type="email" class="form-control" name="correo" id="correo" required>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="from-group">
                                        <label for="telefono">Número Telefónico</label>
                                        <input type="tel" class="form-control" name="telefono" id="telefono" required>
                                    </div>
                                    </p>

                                    <p>
                                    <div class="from-group">
                                        <label for="fecha">Elija el día de Cita</label>
                                        <input type="date" class="form-control" name="fecha" id="fecha" required>
                                    </div>
                                    </p>

                                    <div class="from-group">
                                        <label for="hora">Elija el hora de Cita</label>
                                        <input type="time" class="form-control" name="hora" id="hora" required>
                                    </div>

                                    <p>
                                    <div class="from-group">
                                        <label for="lugar">Lugar de Cita (Únicamente Centro Comerciales)</label>
                                        <input type="text" class="form-control" name="lugar" id="lugar" required>
                                    </div>
                                    </p>
    
    
                                </div>
                            </div>
                        </div>
                        <div id="Alert" class="card-footer d-grid gap-2">
                            <button type="submit" name="send" class="btn btn-outline-danger btn-lg">Registrar</button>
                            <hr>
                        </div>

                        <p class="text-center">¿Quieres cambiar el día de tu cita? Por favor, comunicate a nuestras redes sociales</p>
                        <div class="text-center">
                        <a href="https://wa.me/47178831" class="btn btn-outline-success" role="button" data-bs-toggle="button">WhatsApp</a>
                        <a href="https://www.facebook.com/profile.php?id=61550084357405" class="btn btn-outline-primary" role="button" data-bs-toggle="button" aria-pressed="true">Facebook</a>
                        <a href="https://web.telegram.org/k/#@autoventasking_bot" class="btn btn-outline-secondary" role="button" data-bs-toggle="button">Telegram</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>

    <?php
        include("send.php");

    ?>
</body>

</html>