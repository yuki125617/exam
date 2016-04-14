<html>
<head>
<title>index</title>
</head>
<body align="center">

<?php
if(isset($_POST["account"])){
	$account=$_POST["account"];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
    $tel=$_POST["tel"];
    $login=$_POST["login"];
    $logintime=$_POST["logintime"];


    //新增資料
	$Link=mysqli_connect("localhost","root","JESUS125617","snyuki");
	mysqli_query($Link,"set name utf8");
	$add="INSERT INTO userlogin(account,pwd,email,tel,login,logintime) VALUES('$account','$pwd','$email','$tel','login','logintime')";
	mysqli_query($Link,$add);
	//讀取資料
	$read="SELECT * FROM userlogin";
	$readresult=mysqli_query($Link,$read);
	while ($result=mysqli_fetch_array($readresult)) {
	  echo $result[1]."歡迎回來";
	  echo "您上次的登入時間為:".$result[5];
	  echo "您的登入次數為:".$result[6];
	}

}
?>



</body>
</html>