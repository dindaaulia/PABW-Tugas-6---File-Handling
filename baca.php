<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
body{
   background: url(hutan.png) no-repeat center center fixed; 
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
    </style>
</head>
<body>
<div class="container">
<div class="row thumbnail" style="margin-left: 25%;margin-right: 25%; margin-top: 15%;" >
<h2 style="text-align: center;margin-top: -0.5%">Hasil data </h2>
<br style="margin-left: 15px">
<?php
$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);
echo "<table border=1>";
echo "<tr>";
echo "<td> Nama </td>";
echo "<td> Email </td>";
echo "<td> Phone </td>";
echo "<td> Alamat </td>";
echo "<td> Delete row </td>";
echo "<td> Edit row </td>";
echo "</tr>";
for($i =0; $i<count($baris)-1; $i++) {

    $col = explode("|F|", $baris[$i]);

    echo " <tr>";
    echo "  <td> " . $col[0] . " </td>";
    echo "  <td> " . $col[1] . " </td>";
    echo "  <td> " . $col[2] . " </td>";
    echo "	<td> " . $col[3] . " </td>";
    echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a> </td>';
    echo '  <td> <a href="edit.php?row='.$i.'">EDIT</a> </td>';
    echo "</tr>";
}
echo "</table>";
?>
<br>
    </body>
</html>
