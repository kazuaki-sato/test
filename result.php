<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php 
/*  ここで受信して変数に代入して下さい*/
$name=$_POST["name"];
$name=$_POST["pass"];
$name=$_POST["address"];
$name=$_POST["sex"];
$hody=implode('と',$_POST['hoddy']);





/*  ここで変数を表示して下さい*/
echo "名前:".$name."<br>";
echo "password:".$pass."<br>";
echo "都道府県:".$address."<br>";
echo "性別:".$sex."<br>";
if(isset($_POST["hoddy"])){
    echo "趣味は".$hody."です！";
}  else{
    echo "趣味はありませんよ。";
}












 ?>
</body>
</html>


