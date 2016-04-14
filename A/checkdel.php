<?php

$no=$_GET["no"];

$Link=mysqli_connect("localhost","root","JESUS125617","snyuki");
$checkdel="DELETE FROM userlogin WHERE no=".$no;
mysqli_query($Link,$checkdel);

$read="SELECT * FROM userlogin";
$readresult=mysqli_query($Link,$read);
echo "<table border='1'>";
echo "<tr><td>編號</td><td>帳號</td><td>密碼</td><td>連絡電話</td><td>電子信箱</td></tr>";
while ($result=mysqli_fetch_array($readresult)) {
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
    echo "<td><a href='update_5.php?no=".$result[0]."'>Update</a></td>";
    echo "<td><a href='checkdel.php?no=".$result[0]."'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";
?>