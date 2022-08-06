<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios mínimos</title>
</head>
<body>
    
    <div class="container">
        
        <div class="formulario">

            <form action="proccessSalarios.php" method="post">

                <div class="section">
                    <p>Ingrese su nombre</p>
                    <input type="text" >
                </div>
                <div class="section">
                    <p>Ingrese su salario</p>
                    <input type="number" name="salario">
                </div>
                <div class="btn">
                    <p></p>
                    <input type="submit" value="Enviar">
                </div>

            </form>

        </div>

    </div>

</body>
</html>