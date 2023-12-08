<!DOCTYPE html>
<html>
<head>
<title>Wyznacz najmniejszą z trzech liczb</title>
</head>
<body>
<form method="post" action="">
       Podaj pierwszą liczbę: <input type="number" name="liczba1"><br>
       Podaj drugą liczbę: <input type="number" name="liczba2"><br>
       Podaj trzecią liczbę: <input type="number" name="liczba3">
<input type="submit" value="Wyznacz najmniejszą liczbę">
</form>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $liczba1 = $_POST["liczba1"];
       $liczba2 = $_POST["liczba2"];
       $liczba3 = $_POST["liczba3"];

       if (is_numeric($liczba1) && is_numeric($liczba2) && is_numeric($liczba3)) {
           $najmniejsza = min($liczba1, $liczba2, $liczba3);
           echo "Najmniejsza z podanych liczb to: $najmniejsza";
       } else {
           echo "Podane wartości nie są liczbami.";
       }
   }
   ?>
</body>
</html>