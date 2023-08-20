<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <script src="Script.js"></script>
    <title>Exercício 12</title>
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
        <a href="../Formularios-com-PHP/Exercicio5.php">Exercício 5</a>
        <a href="../Formularios-com-PHP/Exercicio6.php">Exercício 6</a>
        <a href="../Formularios-com-PHP/Exercicio7.php">Exercício 7</a>
        <a href="../Formularios-com-PHP/Exercicio8.php">Exercício 8</a>
        <a href="../Formularios-com-PHP/Exercicio9.php">Exercício 9</a>
        <a href="../Formularios-com-PHP/Exercicio10.php">Exercício 10</a>
        <a href="../Formularios-com-PHP/Exercicio11.php">Exercício 11</a>
        <a href="#">Exercício 12</a>
        <a href="../Formularios-com-PHP/Exercicio13.php">Exercício 13</a>
      </div>
      <div class="overlay"></div>
    </nav>
    <h1>12 - Hora para minuto</h1>
    <form action="" method="post">
    <table>
        <tr>
          <td><p>Hora:</p></td>
          <td><input type="number" name="hora" required/></td>
        </tr>
        <tr>
          <td><p>Minuto:</p></td>
          <td><input type="number" name="min" required/></td>
        </tr>
        <tr>
          <td><p>Segundo:</p></td>
          <td><input type="number" name="seg" required/></td>
        </tr>
      </table>
      <input type="submit" class="enviar" />
    </form>
    <div class="resposta">
      <?php
      error_reporting(E_ERROR | E_PARSE);
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
        $hora = $_POST["hora"];
        $min = $_POST["min"];
        $seg = $_POST["seg"];
        
        if($hora<0){
          echo"Hora inválida!";
        }
        
        elseif ($min<0) {
          echo"Minuto inválido!";
        }
        
        elseif ($seg<0) {
          echo"Segundo inválido!";
        }

        else {
          $min+=$hora*60;
          $seg+=$min*60;
          
          echo"Hora convertida em $seg segundos";
        }
      }
    ?>
    </div>
  </body>
</html>