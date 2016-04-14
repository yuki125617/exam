<?php
if(isset($_POST["account"])){
	$account=$_POST["account"];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
    $tel=$_POST["tel"];



	$Link=mysqli_connect("localhost","root","JESUS125617","snyuki");
	mysqli_query($Link,"set name utf8");
	$add="INSERT INTO userlogin(account,pwd,email,tel) VALUES('$account','$pwd','$email','$tel')";
	mysqli_query($Link,$add);
	
	$read="SELECT * FROM userlogin";
	$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>編號</td><td>帳號</td><td>密碼</td><td>電子信箱</td><td>連絡電話</td></tr>";
	while ($result=mysqli_fetch_array($readresult)) {
		echo "<tr>";
		echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
	    echo "<td><a href='update_5.php?no=".$result[0]."'>修改</a></td>";
	    echo "<td><a href='checkdel.php?no=".$result[0]."'>刪除</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>