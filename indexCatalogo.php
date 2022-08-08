<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping lic</title>
    <link rel="stylesheet" href="styleCatalogo.css">
</head>
<body>

    <div class="container">
        <div class="formulario">
            <form action="proccessCatalogo.php" method="post">

                <div class="seccion">
                    <p>Cantidad de Standard:</p>
                    <input type="text" class="field" name="standard">
                </div>

                <div class="seccion">
                    <p>Cantidad de Home</p>
                    <input type="text" class="field" name="home">
                </div>
                
                <div class="seccion">
                    <p>Cantidad de Premium</p>
                    <input type="text" class="field" name="premium">
                </div>

                <div class="seccion">
                    <p></p>
                    <input type="submit" class="btn">
                </div>
                
            </form>
        </div>
    </div>

</body>
</html>