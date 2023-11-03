<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia komputerowa</title>
    <link href="styl2h.css" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="komputer.png" alt="hurtownia komputerowa">
    </div>
    <div class="lista">
        <h2>Podzespoły</h2>
        <?php
        $lacz = mysqli_connect('localhost','root','','sklep');
        $pyt = "SELECT `kategoria` FROM `typy`;";
        $wyn = mysqli_query($lacz, $pyt);
        echo "<ul>";
        while($row = mysqli_fetch_array($wyn)){
            echo "<li>".$row[0]."</li>";
        }
        echo "</ul>";
        mysqli_close($lacz)
        ?>
    </div>
    <div class="formularz">
        <h2>Hurtownia komputerowa</h2>
        <form action="hurtownia.php" method="post">
            Wybierz kategorię sprzętu
            <input type="number">
            <input type="submit" value="SPRAWDŹ">
            <?php
            $lacz = mysqli_connect('localhost','root','','sklep');
            $pyt = "SELECT podzespoly.`nazwa`,podzespoly.`opis`,podzespoly.`cena` FROM `podzespoly` join typy on podzespoly.typy_id=typy.id WHERE typy.id = 1;";
            $wyn = mysqli_query($lacz, $pyt);
            echo "<ul>";
            while($row = mysqli_fetch_array($wyn)){
                echo "<li>".$row[0]."</li>";
            }
            echo "</ul>";
            mysqli_close($lacz)
            ?>
        </form>
    </div>
    <div class="glowny">
        <H1>Podzespoły we wskazanej kategorii</H1>
        <?php
        ?>
    </div>
    <div class="stopka">
        <h3>hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup> </h3>
        <a href="bok@hurtownia.pl">Napisz do nas</a>
        Partnerzy
        <a href="https://intel.pl/">Intel</a>
        <a href="https://amd.pl/">AMD</a>
        <p>Stronę wykonał: Martyna Borowska</p>
    </div>
</body>
</html>