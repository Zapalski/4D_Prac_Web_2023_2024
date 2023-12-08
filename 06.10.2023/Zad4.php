<!DOCTYPE html>
<html>
<head>
<title>Sprawdź wartość liczby</title>
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
           if ($liczba < 0) {
               echo "Liczba $liczba jest mniejsza od 0.";
           } elseif ($liczba > 0) {
               echo "Liczba $liczba jest większa od 0.";
           } else {
               echo "Liczba $liczba jest równa 0.";
           }
       } else {
           echo "Podana wartość nie jest liczbą.";
       }
   }
   ?>
</body>
</html>