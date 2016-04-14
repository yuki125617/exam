<?php
if(isset($_POST["name"])){
	$name=$_POST["name"];
	$url=$_POST["url"];
	$shorturl=$_POST["shorturl"];
 

	$Link=mysqli_connect("localhost","root","JESUS125617","snyuki");
	mysqli_query($Link,"set name utf8");
	$add="INSERT INTO uploadurl(name,url,shorturl) VALUES('$name','$url','$shorturl')";
	mysqli_query($Link,$add);
	
	$read="SELECT * FROM uploadurl";
	$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>編號</td><td>原網址</td><td>短網址</td><td>點擊率</td><td>上傳時間</td></tr>";
	while ($result=mysqli_fetch_array($readresult)) {
		echo "<tr>";
		echo "<td>".$result[0]."</td><td>".$result[1]."</td><td a href='form.php?shorturl=".$result[2]."'</a></td><td a href='form.php?url=".$result[3]."'</a></td><td>".$result[4]."</td><td>".$result[5]."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
