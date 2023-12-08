<!DOCTYPE html>
<html>
<head>
<title>Sprawdź parzystość liczby</title>
</head>
<body>
<form method="post" action="">
       Podaj liczbę: <input type="text" name="liczba">
<input type="submit" value="Sprawdź">
</form>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $liczba = $_POST["liczba"];
       if (is_numeric($liczba)) {
           if ($liczba % 2 == 0) {
               echo "$liczba jest liczbą parzystą.";
           } else {
               echo "$liczba jest liczbą nieparzystą.";
           }
       } else {
           echo "Podana wartość nie jest liczbą.";
       }
   } else {
       echo "Wprowadź liczbę i kliknij 'Sprawdź' aby sprawdzić parzystość.";
   }
   ?>
</body>
</html>