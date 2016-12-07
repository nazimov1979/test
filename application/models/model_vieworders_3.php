<?php

class Model_vieworders_3 extends Model
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





$query_1="select zakaz.id, zakaz.fio, zakaz.adress, zakaz.data, tovar.id, tovar.tiregty, tovar.oilgty, tovar.sparkgty FROM zakaz, tovar where  zakaz.id=tovar.id order by zakaz.data";
$result_1=mysql_query ($query_1);

//$data_2=mysql_fetch_array ($result_1);
//print_r($data_2);

ob_start();


?> 

<table border=1 color=black width=100% height=100%>
<tr>
<td><b>№</b></td><td><b>ФИО</b></td><td><b>Адрес</b></td><td><b>Дата заказа</b></td><td><b>покрышки</b></td><td><b>масла</b></td><td><b>свечи</b></td>
<?

echo $data;


//$data=mysql_fetch_array($result_1);
//print_r($data);



while ($row=mysql_fetch_array ($result_1)) {


$data2[] = $row;

$id=$row["id"];
$fio=$row["fio"];
$adress=$row["adress"];
$data=$row["data"];
$tireqty=$row["tiregty"];
$oilqty=$row["oilgty"];
$sparkqty=$row["sparkgty"];

?><tr>

<td> <? echo $id ?> </td><td> <? echo $fio ?> </td><td> <? echo $adress ?> </td><td> <? echo $data ?> </td><td> <? echo $tireqty ?> </td><td> <? echo $oilqty ?> </td><td> <? echo $sparkqty ?> </td>

</tr>

<?



}


?> 
</table> 








<?



$data = ob_get_contents();
//$out1 = iconv('UTF-8', 'windows-1251', $out1);
//$data = mb_convert_encoding($data, "UTF-8", "windows-1251");

ob_end_clean();

//echo $data1;

//echo $data1[1];
print_r($data2);

//return $data;
//return $result_1;

return array($data, $data2);


	}

}
