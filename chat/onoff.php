<?php
switch($_GET['case'])
{
default:
echo 'Chọn Chế Độ:<br>
<form action ="onoff.php?case=set" method="post">
<input type="radio" name= "trangthai" value ="on"> Bật<br>
<input type="radio" name= "trangthai" value ="off"> Tắt<br>
Nhập PIN: <input type="password" name ="pass"><br>
<input type="submit" value="     Ok     ">
</form>';
break;
case 'set':
if(md5($_POST['pass'])=="e10adc3949ba59abbe56e057f20f883e") 
{$fp = fopen("onoff.txt","w ")or exit("Có lỗi xảy ra !!");
$tt = $_POST['trangthai'];
fwrite($fp, $tt);
fclose($fp);
}
header("Location: index.php");  
}
?>