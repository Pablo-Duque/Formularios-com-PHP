<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <script src="Script.js"></script>
    <title>Exercício 13</title>
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
        <a href="../Formularios-com-PHP/Exercicio12.php">Exercício 12</a>
        <a href="#">Exercício 13</a>
      </div>
      <div class="overlay"></div>
    </nav>
    <h1>13 - Reajuste do produto</h1>
    <form action="" method="post">
    <table>
        <tr>
          <td><p>Valor:</p></td>
          <td><input type="number" name="valor" required/></td>
        </tr>
        <tr>
          <td><p>Reajuste:</p></td>
          <td><Select name="reajuste">
            <option value="1">15%</option>
            <option value="2">20%</option>
            <option value="3">35%</option>
            <option value="4">40%</option>
          </Select></td>
        </tr>
      </table>
      <input type="submit" class="enviar" />
    </form>
    <div class="resposta">
      <?php
      error_reporting(E_ERROR | E_PARSE);
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
        $valor = $_POST["valor"];
        $reajuste = $_POST["reajuste"];
        
        if($reajuste==1){
          $valor+=$valor*15/100;
        }
        elseif($reajuste==2){
          $valor+=$valor*20/100;
        }
        elseif($reajuste==3){
          $valor+=$valor*35/100;
        }
        else{
          $valor+=$valor*40/100;
        }
    
        echo"Novo valor do produto: R$ $valor,00";
      }
    
    ?>
    </div>
  </body>
</html>