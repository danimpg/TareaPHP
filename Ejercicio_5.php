<!doctype html>
<html>
  
  <body>
      <h1>Ejercicio 5</h1>

      <?php
      header ("Content-type: text/html;charset=\"utf-8\"");

      for ($i=1;$i<=10;$i++)
      {
          echo "<p>$i</p>";
      }
      echo "<p>Finaliza ciclo for</p>";

      for ($i=10;$i>=0;$i--)
      {
          echo "<p>$i</p>";
      }
      echo "<p>Finaliza ciclo for</p>";

      $familia = array("Maria", "Ana", "Jose"; "Pedro");

      for ($i=0;$i<=sizeof($familia);$i++)
      {
          echo "<h2>$familia[$i] numero de elemento $i </h2>";
          echo "<br>";
      }
      echo "<p>Finaliza ciclo for</p>";
      echo "<br><br>";

      echo "<p>Ciclo while</p>";
      while($i <= sizeof($familia)){
          echo "<h2>$familia[$i]</h2>";
          echo "<br>";
          $i++;
      }
      ?>
  </body>
</html>