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
        <form>
        <label for="resposta">Numero 1:</label><br>
        <textarea id="resposta" name="resposta" rows="4" cols="30" placeholder="Escreva aqui..."></textarea><br><br>

        <label for="resposta">Numero 2:</label><br>
        <textarea id="resposta" name="resposta" rows="4" cols="30" placeholder="Escreva aqui..."></textarea><br><br>

        <label for="resposta">Numero 3:</label><br>
        <textarea id="resposta" name="resposta" rows="4" cols="30" placeholder="Escreva aqui..."></textarea><br><br>
        
        <button type="submit">Enviar</button>
    </form>
    </header>
    </div>
</body>
</html>