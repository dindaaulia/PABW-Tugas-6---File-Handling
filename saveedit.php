<?php

$file = "data.txt";
$data = file_get_contents($file);
$rowedit = $_POST['row'];

$rowforedit = $_POST['nama'] . "|F|" . 
              $_POST['email'] . "|F|" .
              $_POST ['phone'] . "|F|" . 
              $_POST ['alamat'] . "[R]";

$baris = explode("[R]", $data);
$databaru = "";
for($i = 0; $i < count($baris)-1; $i++) {
    if($i == $rowedit) {
    	$databaru .= $rowforedit;
    	continue;
    }
    $databaru .= $baris[$i] . "[R]";
}

file_put_contents($file, $databaru);

header('location:baca.php');
?>