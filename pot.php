<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potęgowanie</title>
    <style>
        body{
            width: 800px;
            height: auto;
            margin: 0 auto;
        }
        .menu{
            width: 400px;
            height:auto; 
            margin:0px auto;
            float:left;
        }
        .content{
            width: 400px;
            height:auto; 
            margin:0px auto;
            float:right;
        }
        .content h1{
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="Baner">
        <a href="index.html"><img src="Baner.jpg" alt="Baner"></a>
    </div>
    <div class="menu">
        <p>Menu</p>
        <a href="proste.html">-Proste działania</a><br>
        <a href="index.html">-Menu</a>
    </div>
    <div class="content">
        <p>Treść strony</p>
        <h1>Potęgowanie</h1>
        <form action="" method="GET">
        <div style="font-style: italic;">
                <p>Podaj podstawę potęgi: </p><input type="number" name="liczba1"><br><br>
                <p>Podaj dodatni, całkowity wykładnik potęgi: </p><input type="number" name="liczba2"><br> <br>
            </div>
            <input type="submit" id="potegowanie" value="POTEGOWANIE">
        </form>
        <?php
            $a = @$_GET["liczba1"];
            $b = @$_GET["liczba2"];
            if($a == "" || $b == "") {
                echo "Musisz wpisać podstawe i wykladnik.";
            } else {
                if($b < 0) {
                    echo "Wykładnik musi być dodatni.";
                } else {
                    $wynik = pow($a, $b);
                    echo"$a do potęgi $b = $wynik";
                }
            }
        ?>
    </div>
</body>
</html>