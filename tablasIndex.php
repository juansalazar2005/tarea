<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicación</title>
    <link rel="stylesheet" href="styleTablas.css">
</head>
<body>
    
    <div class="container">

        <div class="formulario">

            <form action="proccessTablas.php" method="post">

                <div class="section">
                    <p>Escribe la tabla que desees ver</p>
                    <input type="number" name="tabla" class="field">
                </div>
                <div class="section">
                    <p>Escribe hasta que resultado quieres que llegue</p>
                    <input type="number" name="numero" class="field">
                </div>
                <div class="botn">
                    <p></p>
                    <input type="submit" value="Enviar" class="btn">
                </div>
                
            </form>

        </div>

    </div>

</body>
</html>