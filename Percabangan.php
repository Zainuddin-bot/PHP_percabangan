<?php

$status[1] = "kawin";
$status[2] = "belum kawin";

$golongan [1] = "A";
$golongan [2] = "B";

$gajiPokok [1] = 1000000;
$gajiPokok [2] = 700000;

$tunjangan [1] = (10/100) * 1000000;
$tunjangan [2] = 0;

if ($status [1] && $golongan [1]);
{
  $gajiBersih[1] = $tunjangan [1] + $gajiPokok [1];
}
if($status [2] && $golongan [1]);
{
  $gajiBersih[2] = $tunjangan [2] + $gajiPokok [1];
}
if($status [1] && $golongan [2]);
{
  $gajiBersih[3] = $tunjangan [1] + $gajiPokok [2];
}
if($status [2] && $golongan [2]);
{
  $gajiBersih[4] = $tunjangan [2] + $gajiPokok [2];
}

echo "Kawin dan golongan A gaji bersihnya <br> =>". $gajiBersih[1];
echo"<hr>";
echo "Belum kawin dan golongan A gaji bersihnya<br> =>". $gajiBersih[2];
echo"<hr>";
echo "kawin dan golongan B gaji bersihnya<br> =>". $gajiBersih[3];
echo"<hr>";
echo "Belum kawin dan golongan B gaji bersihnya<br> =>". $gajiBersih[4];

