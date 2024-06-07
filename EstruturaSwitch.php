<!DOCTYPE html>
<html>
<body>
      <?php
      $hoje ="Quarta";
      switch ($hoje){
        case "Segunda";
        echo "Hoje é Segunda-feira";
        break;
        case 'Terça';
        echo "Hoje é Terça-feira";
        break;
        echo "Hoje é quarta-Feira";
        break;
        default;
        echo "Não é inicio da semana";
        
      }
      ?>
</body>
</html>