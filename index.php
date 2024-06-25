<?php
    function nactiTridu($trida) : void
    {
        require("./$trida.php");
    }

    spl_autoload_register("nactiTridu");

    databaze::pripoj('localhost', 'root', '', 'evidence_pojisteni');

        $zobrazeni= new Zobrazeni();
        $vlozeni= new Vlozeni();

        if ($_POST)
        {
            $vlozeni->pridejPojistence($_POST['jmeno'], $_POST['prijmeni'], $_POST['telefon'], $_POST['vek']);
           header('location: index.php');
        }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width" initial-scale="1.0">
    <link rel="stylesheet" href="styl.css" type="text/css">
    <title>Pojištění</title>
    </head>
    <body>
        <div class="container">
            <div class="evidence">Evidence pojištěných osob</div>
            <div class="projekt"><a href="Projekt.html">Projekt</a></div>
            <div class="pojisteni"><a href="index.php"></a></div>
        </div>
            <div class="tabulka">
            <?php
                $zobrazeni->vypis();
            ?>
            </div>
        <h2>Vložit nového pojištěnce</h2>
    <div class="scrollable_table">
    <form method="post">
        <table class="vlozeni">
        <tr>
            <td>
        <label for="jmeno">Jméno</label>
            </td>
            <td>
        <input name="jmeno" type="text" id="jmeno">
            </td>
            <td>
        <label for="prijmeni">Příjmení</label>
            </td>
            <td>
        <input name="prijmeni" type="text" id="prijmeni">
            </td>
        </tr>
        <tr>
            <td>
            <label for="telefon">Telefon</label>
            </td>
            <td>
        <input name="telefon" type="number" id="telefon">
            </td>
            <td>
            <label for="vek">Věk</label>
            </td>
            <td>
        <input name="vek" type="number" id="vek"><br>
            </td>
            </tr>
            </table>
        <input class="tlacitko" type="Odeslat" type="submit" name="Odlesat" id="odeslat">
    </form>
    </div>
    </body>
</html>