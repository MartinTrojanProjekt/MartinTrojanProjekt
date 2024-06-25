<?php
    class Vlozeni{
        public function pridejPojistence(string $jmeno, string $prijmeni, string $telefon, int $vek)
            {
                databaze::dotaz('INSERT INTO pojisteni (jmeno, prijmeni, telefon, vek) VALUES (?, ?, ?, ?)', array($jmeno, $prijmeni, $telefon, $vek));
            }
    }