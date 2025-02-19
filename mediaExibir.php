<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir media de 3 numeros </title>
    <style>
    .container{
      width: 900px; 
      height: 900px; 
      background-color: grey; 
      display: flex;
      justify-content: center; 
    }
  </style>
</head>
<body>
<?php
if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['numero3'])) {
    // Captura os valores dos números enviados via GET
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $numero3 = $_GET['numero3'];

    // Calcula a média
    $media = ($numero1 + $numero2 + $numero3) / 3;

    // Exibe o resultado
    echo "A média dos números é: " . $media;
} else {
    echo "Por favor, insira os números no formulário.";
}
?>

</body>
</html>