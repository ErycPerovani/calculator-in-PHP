<html>
    <head>
        <title>Minha Calculadora</title>
    </head>
    <body>
        <form method="post" action="calcular.php">
            valor1:
            <input type="text" name="valor1" size="5" />
            <select name="tipo">
                <option selected="selected">somar</option>
                <option>subtrair</option>
                <option>multiplicar</option>
                <option>dividir</option>       
            </select>
            valor2:
            <input type="text" name="valor2" size="5" />
            <input type="submit" name="calcularbtn" size="calcular"/>
        </form>
    </body>
</html>
