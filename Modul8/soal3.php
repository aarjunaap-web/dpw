<?php

$siswa = [
    ["nama" => "Adi", "poin" => 75],
    ["nama" => "Joni", "poin" => 80],
    ["nama" => "Jihan", "poin" => 65],
    ["nama" => "Aya", "poin" => 70],
    ["nama" => "Ita", "poin" => 85],
    ["nama" => "Budi", "poin" => 90],
    ["nama" => "Tini", "poin" => 95],
    ["nama" => "Sari", "poin" => 65],
];

// A
echo "Poin nomor urut 5: " . $siswa[4] ["poin"] . "<br><br>";

//B
echo "Siswa dengan poin 90:<br>";
foreach ($siswa as $s) {
    if ($s["poin"] == 90) {
        echo $s["nama"] . "<br>";
    }
}

// C
echo "<br>Siswa dengan poin 100:<br>";
$ada = false;

foreach ($siswa as $s) {
    if ($s["poin"] == 100) {
        echo $s["nama"] . "<br>";
        $ada = true;
    }
}

if (!$ada) {
    echo "Tidak ada";
}

?>