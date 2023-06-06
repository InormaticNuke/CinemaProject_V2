<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Compra de Entradas</title>
</head>

<body>
    <h1>Ingresa tu compra de entradas</h1>
    <form action="entradas.php" method="post">
        <table class="Table">
            <tr>
                <td><label for="titulo">Película:</label></td>
                <td>
                    <select name="pelicula[]">
                        <option value="">Selecciona</option>
                        <option value="Super Mario Bros">Super Mario Bros</option>
                        <option value="John Wick 4">John Wick 4</option>
                        <option value="La Ballena">La Ballena</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="Fecha">Fecha:</label></td>
                <td><input type="date" name="fecha[]" required></td>
            </tr>
            <tr>
                <td><label for="Cantidad_Niño">Cantidad Niño:</label></td>
                <td><input type="number" name="cantidad_nino[]" required></td>
            </tr>
            <tr>
                <td><label for="Cantidad_Adulto">Cantidad Adulto:</label></td>
                <td><input type="number" name="cantidad_adulto[]" required></td>
            </tr>
            <tr>
                <td><label for="Cantidad_Adulto_Mayor">Cantidad Adulto Mayor:</label></td>
                <td><input type="number" name="cantidad_adulto_mayor[]" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>