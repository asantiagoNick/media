<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>média de numeros</title>
    <style>
    .container{
      width: 1100px; 
      height: 900px; 
      background-color: grey; 
      display: flex;
      justify-content: center; 
    }
  </style>
</head>
<body>
    
    <div class=container>
    <header class="barra-titulo">
        <h1 class: container >Média de numeros</h1>
       
<form method="get" action="mediaExibir.php">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" required><br><br>

    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" required><br><br>

    <label for="numero3">Número 3:</label>
    <input type="number" name="numero3" required><br><br>

    <input type="submit" value="Calcular a Média">
</form>
    </header>
    </div>

</body>
</html>