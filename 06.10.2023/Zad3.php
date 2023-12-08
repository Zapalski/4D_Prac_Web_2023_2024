<!DOCTYPE html>
<html>
<head>
<title>Sprawdź przedział liczby</title>
</head>
<body>
<form method="post" action="">
       Podaj liczbę: <input type="number" name="liczba">
<input type="submit" value="Sprawdź">
</form>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $liczba = $_POST["liczba"];
       if (is_numeric($liczba)) {
           if ($liczba >= 100 && $liczba <= 150) {
               echo "Liczba $liczba mieści się w przedziale od 100 do 150.";
           } else {
               echo "Liczba $liczba nie mieści się w przedziale od 100 do 150.";
           }
       } else {
           echo "Podana wartość nie jest liczbą.";
       }
   }
   ?>
</body>
</html>