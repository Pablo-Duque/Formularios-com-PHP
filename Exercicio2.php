<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <script src="Script.js"></script>
    <title>Exercício 2</title>
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
        <a href="#">Exercício 2</a>
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
    <h1>2 - Calculador de salário</h1>
    <form action="" method="post">
    <table>
        <tr>
          <td><p>Seu nível:</p></td>
          <td><Select name="nivel">
            <option value="1">Nível 1</option>
            <option value="2">Nível 2</option>
            <option value="3">Nível 3</option>
          </Select></td>
        </tr>
        <tr>
          <td><p>Horas trabalhadas:</p></td>
          <td><input type="number" name="horas" required/></td>
        </tr>
      </table>
      <input type="submit" class="enviar" />
    </form>
    <div class="resposta">
      <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      $nivel = $_POST["nivel"];
      $horas = $_POST["horas"];
      
      if($horas<0){
        echo"Horas inválidas!";
      }

      elseif($nivel==1){
        $sal=$horas*12;
        echo"Seu salário é de R$ $sal,00";
      }
      elseif($nivel==2){
        $sal=$horas*17;
        echo"Seu salário é de R$ $sal,00";
      }
      else{
        $sal=$horas*25;
        echo"Seu salário é de R$ $sal,00";
      }
  }

    ?>
    </div>
  </body>
</html>