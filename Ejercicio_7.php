<!doctype html>
<html>
  
  <body>
      <h1>Ejercicio 7</h1>

      <?php
      header ("Content-type: text/html;charset=\"utf-8\"");
      
      echo "<h1>Numero Ingresado</h1>";

      echo "<h1>".$_GET['numero']."</h1>";

      if(is_numeric($_GET['numero']))
      {
          echo "<p>Ha ingresado un valor numerico</p>";
          echo "<br>";
      }
      else{
        echo "<p>El valor que Ingreso no es un valor numerico</p>";
        echo "<br>";
      }
      if($_GET['numero'] >= 1)
      {
        echo "<p>El numero ingresado si es mayor que 1</p>";
        echo "<br>";
      }
      else
      {
        echo "<p>El numero ingresado no es mayor que 1</p>";
        echo "<br>";
      }
      if(ctype_digit($_GET['numero']) == true)
      {
        echo "<p>El valor ingresado es un numero entero</p>";
        echo "<br>";
      }
      else
      {
        echo "<p>El valor ingresado no es un numero entero</p>";
        echo "<br>";
      }

    /*  $i=2;
      boolean $primo = false;
      while(($primo == false) && ($i < $_GET['numero']))
      {
          if(($_GET['numero'] % $i) == 0){
              $primo = true;
          }
          else{
              $primo = false;
              $i++;
          }
          return $primo;
      }

      if($primo == true){
        echo "<p>El valor ingresado es un numero primo</p>";
        echo "<br>";
      }
      else{
        echo "<p>El valor ingresado no es un numero primo</p>";
        echo "<br>";
      }
*/
/*
       $contador = 0;
       for($i=1;$i<=$_GET['numero'];$i++)
       {
           if(($_GET['numero'] % $i) == 0)
           {
               $contador++;
           }
       }
       if(contador <= 2)
       {
        echo "<p>El valor ingresado es un numero primo</p>";
        echo "<br>";V
       }
       else
       {
        echo "<p>El valor ingresado No es un numero primo</p>";
        echo "<br>";
       }*/

       $contador = 0;
       for ($i=1;$i<=$_GET['numero'];$i++)
       {
           echo "<p>$i</p>";
           if(($_GET['numero'] % $i) == 0)
           {
               $contador++;
           }
       }

       if($contador == 2)
       {
        echo "<p>El valor ingresado es un numero primo</p>";
        echo "<br>";
       }
       else
       {
        echo "<p>El valor ingresado No es un numero primo</p>";
        echo "<br>";
       }

      ?>

      <form>
          Validar Numero :
          <input name="numero" type="text" placeholder="Escribe un Numero: ">
          <input type="submit" value="Validar">
    </form>
  </body>
</html>