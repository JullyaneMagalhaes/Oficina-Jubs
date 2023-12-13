<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="principal.css">
</head>
<body>
    <h1> Oficina Jubs</h1>

    <form action="processar.php" method="post">
    <table>
        <tr>
            <th>Item</th>
            <th>Quantidade</th>
        </tr>

        <tr>
            <td class='produto'>Pneu</td>
            <td> <input type="number" name="pneu" id="pneu" min='0' value='0'></td>
        </tr>

        <tr>
            <td class='produto'>Oléo</td>
            <td> <input type="number" name="oleo" id="oleo" min='0' value='0'></td>
        </tr>

        <tr>
            <td class='produto'>Velas</td>
            <td> <input type="number" name="vela" id="vela" min='0' value='0'></td>
        </tr>

        <tr>
            <td>Como você nos achou?</td>
            <td> <select name="achar" id="achar">
                <option value="a">Sou cliente</option>
                <option value="b">Anúncio de TV</option>
                <option value="c">Telefone</option>
                <option value="d">Boca a boca</option>
            </select></td>
        </tr>
    </table>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>