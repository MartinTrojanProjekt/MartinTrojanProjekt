<?php
    class Zobrazeni {
        public function vypis() : void
        {
            $vysledky = databaze::dotaz('SELECT * FROM pojisteni ORDER BY pojistenec_id DESC');

            echo('<h2>Pojištěné osoby</h2><table border="1">');
            echp('<tr>
                 <th>Jméno</th>
                 <th>Příjmení</th>
                 <th>Telefon</th>
                 <th>Věk</th>');
            foreach ($vysledky as $vysledek)
            {
                echo('<tr><td>' . htmlspecialchars($vysledek['jmeno']));
                echo('</td><td>' . htmlspecialchars($vysledek['prijmeni']));
                echo('</td><td>' . htmlspecialchars($vysledek['telefon']));
                echo('</td><td>' . $vysledek['vek']);
                echo('</td></td>');
            }
            echo('</table>');
        }
    }