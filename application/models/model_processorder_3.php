﻿<?php

class Model_processorder_3 extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		

// Создать короткие имена переменных
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $address = $_POST['address'];
  $fio = $_POST['fio'];
  $DOCUMENT_ROOT = $HTTP_SERVER_VARS['DOCUMENT_ROOT'];


//подключаемся к базе данных

$hostname="localhost";
$user="root";
$password="";
$db="lab3";

if(!$link = mysql_connect($hostname, $user, $password))

{
//echo "<br> Не могу соединиться с сервером базы данных <br>";
exit();
}
echo "<br> Cоедининение с сервером базы данных прошло успешно <br>";


if (!mysql_select_db($db, $link))
{ 
//echo "<br> Не могу выбрать базу данных<br>";
exit();
}
else
{
echo "<br> Выбор базы данных прошел успешно <br>";
}



/*
$query="insert into zakaz (fio,adress,data) values ('$fio','$address','$date_1')";
$result=mysql_query ($query);



$query_1="select zakaz.id  from zakaz where  zakaz.fio='$fio' ";
$result_1=mysql_query ($query_1);

while ($row=mysql_fetch_array ($result_1)) {

$id=$row["id"];

}

$query="insert into tovar (id, tiregty,oilgty,sparkgty) values ('$id','$tireqty','$oilqty','$sparkqty')";
$result=mysql_query ($query);


*/







	}

}
