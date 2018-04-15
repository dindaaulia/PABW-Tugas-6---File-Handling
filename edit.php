<?php
$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);
$kolom = explode("|F|", $baris[$_GET['row']]);
$nama = "$kolom[0]";
$email = "$kolom[1]";
$phone = "$kolom[2]";
$alamat = "$kolom[3]";

?>
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
<h2 style="text-align: center;margin-top: -0.5%">Data diri yang akan di edit</h2>
<br>
<form action="saveedit.php" method="POST">
                Nama : 
                <input type="text" name="nama" value="<?php echo $nama ?>" style="margin-left: 89px">
                <br>
                Email : 
                <input type="email" name="email" value="<?php echo $email ?>" style="margin-left: 92px">
                <br>
                Phone :
                <input type="tel" name="phone" value="<?php echo $phone ?>" style="margin-left: 86px">
                <br>
                alamat : 
                <input type="text" name="alamat" value="<?php echo $alamat ?>" style="margin-left: 83px">
                <input type="hidden" name="row" value="<?php echo $_GET['row'] ?>">
                <br><br>
				<input type="submit" value="Save" style="margin-left: 33%">
        </form>
    </body>
</html>