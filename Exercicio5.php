<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <script src="Script.js"></script>
    <title>Exercício 5</title>
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
        <a href="../Formularios-com-PHP/Exercicio1.php">Exercício 1</a>
        <a href="../Formularios-com-PHP/Exercicio2.php">Exercício 2</a>
        <a href="../Formularios-com-PHP/Exercicio3.php">Exercício 3</a>
        <a href="../Formularios-com-PHP/Exercicio4.php">Exercício 4</a>
        <a href="#">Exercício 5</a>
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
    <h1>5 - Positivo ou negativo?</h1>
    <form action="" method="post">
    <table>
        <tr>
          <td><p>Número:</p></td>
          <td><input type="number" name="num" required/></td>
        </tr>
      </table>
      <input type="submit" class="enviar" />
    </form>
    <div class="resposta">
      <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      
      $num = $_POST["num"];
      
      if($num<0){
        echo"O número é negativo";
      }
      else{
        echo"O número é positivo";
      }
      
    }
    ?>
    </div>
  </body>
</html>