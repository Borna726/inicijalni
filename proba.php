<?php
echo "Ime i Prezime";
?>
<h1>Novosti<h1>
<?php echo "<p>Zadnja izmjena: 29. 9. 2026.</p>"; ?>
<?php
$nazivTvrtke = "SigurnaMreža d.o.o.";   // tekst (string)
$godinaOsnutka = 2019;                  // cijeli broj (int)
$cijenaPaketa = 149.90;                 // decimalni broj (float)
$radiDanas = true;                      // istina/laž (bool)

echo $nazivTvrtke;
echo "<p>Osnovani $godinaOsnutka.</p>";          // varijabla unutar dvostrukih navodnika
echo "<p>Paket: " . $cijenaPaketa . " eura.</p>"; // spajanje točkom
?>