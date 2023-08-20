<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Style.css" />
    <script src="Script.js"></script>
    <title>Exercício 9</title>
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
        <a href="#">Exercício 9</a>
        <a href="../Formularios-com-PHP/Exercicio10.php">Exercício 10</a>
        <a href="../Formularios-com-PHP/Exercicio11.php">Exercício 11</a>
        <a href="../Formularios-com-PHP/Exercicio12.php">Exercício 12</a>
        <a href="../Formularios-com-PHP/Exercicio13.php">Exercício 13</a>
      </div>
      <div class="overlay"></div>
    </nav>
    <h1>9 - Reajuste de salário</h1>
    <form action="" method="post">
    <table>
        <tr>
          <td><p>Cargo:</p></td>
          <td><Select name="cargo">
            <option value="1">Gerente</option>
            <option value="2">Engenheiro</option>
            <option value="3">Técnico</option>
            <option value="4">Outro</option>
          </Select></td>
        </tr>
        <tr>
          <td><p>Salário: </p></td>
          <td><input type="number" name="sal" required/></td>
        </tr>
      </table>
      <input type="submit" class="enviar" />
    </form>
    <div class="resposta">
      <?php
      error_reporting(E_ERROR | E_PARSE);
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
            
        $cargo = $_POST["cargo"];
        $sal = $_POST["sal"];
        
        if($cargo==1){
          $salsao=$sal+($sal*10/100);
          $dif=$salsao-$sal;
        }
        elseif($cargo==2){
          $salsao=$sal+($sal*20/100);
          $dif=$salsao-$sal;
        }
        elseif($cargo==3){      
          $salsao=$sal+($sal*30/100);
          $dif=$salsao-$sal;
        }
        else{
          $salsao=$sal+($sal*40/100);
          $dif=$salsao-$sal;
        }
        echo"<table>
        <tr><td>Salário antigo: $sal</td></tr>
        <tr><td>Salário atual: $salsao</td></tr>
        <tr><td>Diferença: $dif</td></tr>
        </table>";
      }
    ?>
    </div>
  </body>
</html>