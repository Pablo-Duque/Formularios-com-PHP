<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <script src="Script.js"></script>
    <title>Exercício 1</title>
    <style>
      .resposta{
        display: flex;
        justify-content: center;
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="menu">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <div class="itens">
        <a href="#">Exercício 1</a>
        <a href="../Formularios-com-PHP/Exercicio2.php">Exercício 2</a>
        <a href="../Formularios-com-PHP/Exercicio3.php">Exercício 3</a>
        <a href="../Formularios-com-PHP/Exercicio4.php">Exercício 4</a>
        <a href="../Formularios-com-PHP/Exercicio5.php">Exercício 5</a>
        <a href="../Formularios-com-PHP/Exercicio6.php">Exercício 6</a>
        <a href="../Formularios-com-PHP/Exercicio7.php">Exercício 7</a>
        <a href="../Formularios-com-PHP/Exercicio8.php">Exercício 8</a>
        <a href="../Formularios-com-PHP/Exercicio9.php">Exercício 9</a>
        <a href="../Formularios-com-PHP/Exercicio10.php">Exercício 10</a>
        <a href="../Formularios-com-PHP/Exercicio11.php">Exercício 11</a>
        <a href="../Formularios-com-PHP/Exercicio12.php">Exercício 12</a>
        <a href="../Formularios-com-PHP/Exercicio13.php">Exercício 13</a>
      </div>
      <div class="overlay"></div>
    </nav>
    <h1>1 - Calculador de média</h1>
    <form action="" method="post">
      <table>
        <tr>
          <td><p>Nome:</p></td>
          <td><input type="text" name="nome" maxlength="40" size="41 " required/></td>
        </tr>
        <tr>
          <td><p>Nota 1:</p></td>
          <td><input type="number" name="nota1" required/></td>
        </tr>
        <tr>
          <td><p>Nota 2:</p></td>
          <td><input type="number" name="nota2" required/></td>
        </tr>
        <tr>
          <td><p>Nota 3:</p></td>
          <td><input type="number" name="nota3" required/></td>
        </tr>
      </table>
      <input type="submit" class="enviar" />
    </form>
    <div class="resposta">
    <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nome = $_POST["nome"];
      $nota1 = $_POST["nota1"];
      $nota2 = $_POST["nota2"];
      $nota3 = $_POST["nota3"];
  
      $media = ($nota1+$nota2+$nota3)/3;
      
      if($media>=7){
          echo"$nome, sua média foi de $media. Você foi aprovado(a)!";
      }
      elseif($media<7&&$media>=0){
          echo"$nome, sua média foi de $media. Você foi reprovado(a)!";
      }
      else{
          echo"Média inválida!";
      }
  }
    
    ?>
    </div>
  </body>
</html>
