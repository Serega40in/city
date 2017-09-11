<?

header('Content-Type: text/html; charset=windows-1251');
// ----------------------------êîíôèãóðàöèÿ-------------------------- // 
 
$adminemail="serega40-in@yandex.ru";  // e-mail àäìèíà 
 
$date=date("d.m.y"); // ÷èñëî.ìåñÿö.ãîä 
 
$time=date("H:i"); // ÷àñû:ìèíóòû:ñåêóíäû 
 
 
//---------------------------------------------------------------------- // 
 
  
 
// Ïðèíèìàåì äàííûå ñ ôîðìû 

$name=$_GET['name'];  
$name=iconv('utf-8', 'cp1251', $name);
$tel=$_GET['tel'];  
$tel=iconv('utf-8', 'cp1251', $tel);
$kom=$_GET['kom'];  
$kom=iconv('utf-8', 'cp1251', $kom);
 
 { 
 
 
$msg=" 

<p>$date $time</p> 
 
 
<p>���: $name</p>

<p>�������: $tel</p>
<p>�����������: $kom</p>
<br/>

";
 
  

 
   
mail("rabresh@mail.ru", "$date $time ������ �� �������������", "$msg", "Content-type: text/html; charset=windows-1251\r\n\r\n");

// Âûâîäèì ñîîáùåíèå ïîëüçîâàòåëþ 
echo 'Отправляется...';


exit('<meta http-equiv="refresh" content="0; url=index3.php" />');

}
?>