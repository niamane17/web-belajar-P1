<?php
$namaWarung = "Warung Kopi Digital";
echo "<h1>$namaWarung</h1>";
<?php
$jam = (int) date("H");
if ($jam >= 8 && $jam < 22) {
  echo "<p>Sedang buka</p>";
} else {
  echo "<p>Sedang tutup</p>";
}
