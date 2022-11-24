<?php

require 'Medoo.php';
 

use Medoo\Medoo;
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'itp_vt',
	'server' => 'localhost',
	'username' => 'pinar',
	'password' => 'pinar',
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306
]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title> ansiklopedi</title>
  <style>

    table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
   </style>
</head>
<body>
    <form action="" method="post">
	Ansiklopedinin Adı: <input type="text" name="ad" value="">
    Alanı: <input type="text" name="alan" value="">
    Yazarı: <input type="text" name="yazar" value="">
	Yayın Evi: <input type="text" name="yayin_evi" value="">
    <input type="submit" value="Kaydet">
	</form><br><br><br>
	
<?php

$ad="";
$alan="";
$yazar="";
$yayinevi="";

if(isset($_POST["ad"]) && isset($_POST["alan"]) && isset($_POST["yazar"]) && isset($_POST["yayin_evi"])){

$ad=$_POST["ad"];
$alan=$_POST["alan"];
$yazar=$_POST["yazar"];
$yayinevi=$_POST["yayin_evi"];
$database->insert("tbl_391565",["ad"=> $ad, "alan"=> $alan, "yazar"=> $yazar, "yayin_evi"=> $yayinevi]); 
$sonkayit=0;
$sonkayit=$database->id();
if($sonkayit>0){
	echo '<script>alert("Kayıt Başarılı");</script>';
}else { 
    echo '<script>alert("Hata!");</script>';
}
}
?>
<table class="blueTable">
<thead>
<tr>
<th>sıra</th>
<th>Ad</th>
<th>Alan</th>
<th>Yazarı</th>
<th>Yayın Evi</th>
</tr>
</thead>
<tbody>


<?php
$kayitlar = $database->select ("tbl_391565","*");
$sira=1;
foreach ($kayitlar as $kayit){
	echo "<tr>
    <td> $sira</td>
    <td>".$kayit["ad"]."</td>
    <td>".$kayit["alan"]."</td>
    <td>".$kayit["yazar"]."</td>
    <td>".$kayit["yayin_evi"]."</td>
    </tr>";
	$sira++;
	



}
?>
</tbody>
</table>

</body>
</html>
