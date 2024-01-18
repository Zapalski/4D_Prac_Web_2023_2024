<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div class = "GornyBaner">
    <h1>Hurtownia z najlepszymi cenami</h1>
</div>
<div class = "BlokLewy">
    <h2>Nasze cesxxsny</h2>
    <table>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'sklep');
    
    $zapytanie1 = "SELECT nazwa, cena FROM towary LIMIT 4";
    $wynik = mysqli_query($conn, $zapytanie1);
    while ($row = mysqli_fetch_array($wynik)){
        echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        
    }
    ?>
    </table>
    
</div>
<div class="BlokSrodkowy">
<h2>Koszt zakupów</h2>
<form>
    wybierz artykuł:
    <select>
        <option>Zeszyt 60 kartek</option>
        <option>Zeszyt 32 kartki</option>
        <option>Cyrkiel</option>
        <option>Linijka 30 cm</option>
      </select>
      <br>
      liczba sztuk:
      <input type="number" >
      //php
      
      <br>
      <button>OBLICZ</button>
      <?php
      mysqli_close($conn)
      ?>
</form>
</div>
<div class="BlokPrawy">
    <h2>Kontakt</h2>
    <img src="zakupy.png" alt="hurtownia">
    <p >e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p> 

</div>
<footer>
    <h4>Witrynę wykonał:Jakub Zapała</h4>

</footer>
    
</body>
</html>