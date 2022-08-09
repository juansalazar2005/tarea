<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios mínimos</title>
    <link rel="stylesheet" href="styleSalarios.css">
</head>
<body>
    
    <div class="container">
        
        <div class="formulario">

            <form action="proccessSalarios.php" method="post">

                <div class="section">
                    <p>Ingrese su nombre</p>
                    <input type="text" class="field">
                </div>
                <div class="section">
                    <p>Ingrese su salario</p>
                    <input type="number" name="salario" class="field">
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