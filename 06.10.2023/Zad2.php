<!DOCTYPE html>
<html>
<head>
    <title>Zad2</title>
</head>
<body>
    <form method="post" action="">

        Podaj pierwszą liczbę: <input type="number" name="liczba1"><br>

        Podaj drugą liczbę: <input type="number" name="liczba2">

        <input type="submit" value="Sprawdź">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $liczba1 = $_POST["liczba1"];

        $liczba2 = $_POST["liczba2"];


        if (is_numeric($liczba1) && is_numeric($liczba2)) {

            if ($liczba2 == 0) {

                echo "Nie można dzielić przez zero.";

            } elseif ($liczba1 % $liczba2 == 0) {

                echo "$liczba1 jest podzielna przez $liczba2 bez reszty.";

            } else {

                echo "$liczba1 nie jest podzielna przez $liczba2 bez reszty.";

            }

        } else {

            echo "Podane wartości nie są liczbami.";

        }
    }
    ?>
</body>
</html>