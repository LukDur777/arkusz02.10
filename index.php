<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header> Dzisiejsze promocje naszego sklepu </header>
    <div class="kolumny">
        <div class="lewo">
            <h2>Taniej o 30%</h2>
            <!-- <?php
            // $db = new mysqli(`localhost`, `root`, ``, `sklep`);
            // $db = "SELECT nazwa FROM `towary` WHERE `promocja` = 1;"
            // $result = $db->query($q);
            ?> -->
            <ol>
                <li>Gumka do mazania</li>
                <li>Cienkopis</li>
                <li>Pisaki 60szt</li>
                <li>Markery 4szt</li>
            </ol>

        </div>

        <div class="srodek">
            <h2>Sprawdź cenę</h2>
            <form action="index.php" method="post">
                <select name="ItemSelect" id="">
                    <option value="">Gumka do mazania</option>
                    <option value="">Cienkopis</option>
                    <option value="">Pisaki 60szt</option>
                    <option value="">Markery 4szt</option>F
                    <input type="submit" value="SPRAWDZ">

                </select>
            </form>
            <p>
                <!-- skrpy -->
            </p>

        </div>

        <div class="prawo">
            <h2>Kontakt</h2>
            <p>email <a href="mailto:bok@sklep.pl"> bok@sklep.pl</a> </p>
            <img src="promocja.png" alt="">
        </div>
    </div>
    <footer>
        <h4>Autor strony: 000000000000</h4>
    </footer>

</body>

</html>