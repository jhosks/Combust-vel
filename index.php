<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de consumo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<main>
<body>
    <div class="painel">
        <h2>Instruções</h2> 
        <div class="conteudo-painel">
        <p>Esta aplicação tem como finalidade demonstar os valores que são gastos com combustível durante 
        uma viagem, com base no consumo do seu veículo, e com a dist ância determinada por você.</p>
        <p>Os combustíves disponíveis para este cálculo são: </p>
            <ul>
                <li><b>Álcool</b></li>
                <li><b>Diesel</b></li>
                <li><b>Gasolina</b></li>
            </ul>
        </div>
    </div>

    <div class="painel">
        <h2> Calculo do valor (R$) do consumo</h2>
        <div class="conteudo-painel">
            <hr>
            <form action="calcular.php" method="POST" class="form">
                <label for="distancia">Distância em quilômetros a ser percorrido</label><br>
                <input  type="number" class="campoTexto" name="distancia" required/><br>

                <label for="autonomia" >Consumo de combustível do veículo</label><br>
                <input  type="number" class="campoTexto" name="autonomia" required/><br>

                <button class="botao" type="submit">Calcular</button>
            </form>
        </div>
    </div>
</body>
</main>
</html>