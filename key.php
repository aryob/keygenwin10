<?php

echo "\n\n *** License key Windows 10 *** ";
echo "\n\n *** Code by Aryo *** ";
echo "\n\n *** API by INDOSEC *** ";
echo "\n\n(*)Masukkan Jumlah  : ";
$max = trim(fgets(STDIN));
$no = 1;

echo "\n [+] Key Windows [+]\n \n";

for($no; $no <= $max; $no++){

    $html = file_get_contents("http://indosec.web.id/api/key.php?action=random&win=10");

    $data = json_decode($html);

    if($data->status == 'success') {
        echo "[+] ".$data->data->key."\n";
    }
}

?>