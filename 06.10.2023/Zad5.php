<!DOCTYPE html>
<html>
<head>
<title>Sprawdź swój wiek</title>
</head>
<body>
<form method="post" action="">
       Podaj swój wiek: <input type="number" name="wiek" required>
<input type="submit" value="Sprawdź">
</form>

<?php
   if (isset($_POST['wiek'])) {
       $wiek = (int)$_POST['wiek'];

       if ($wiek < 11) {
           echo "Masz mniej niż 11 lat - jesteś dzieckiem.";
       } elseif ($wiek >= 11 && $wiek <= 17) {
           echo "Masz między 11 a 17 lat - jesteś nastolatkiem.";
       } else {
           echo "Masz 18 lub więcej lat - jesteś dorosły.";
       }
   }
   ?>
</body>
</html>