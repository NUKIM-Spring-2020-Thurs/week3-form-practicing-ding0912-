<?php  
$name=$_POST["username"];
$birth=$_POST["birthday"];
$mail=$_POST["email"];
$idnumber=$_POST["id"];
$phone=$_POST["phonenumber"];
$live=$_POST["city"];
$study=$_POST["highschool"];
echo "您的名字:".$name."<br>";
echo "您的生日:".$birth."<br>";
echo "您的郵件信箱:".$mail."<br>";
echo "您的身分證字號:".$idnumber."<br>";
echo "您的電話號碼:".$phone."<br>";
echo "您的高中:".$study."<br>";
echo nl2br(htmlspecialchars($historycomment))."<br/>";
$livenumber = count($live);

for($i=0;$i<$livenumber;$i++){
    echo "您的居住地:".$live[$i]."<br/>";
}

echo nl2br(htmlspecialchars($comment));
?>