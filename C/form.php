<html>

<head></head>
<body>
<form action="index.php" method="post">
名稱:<input type='text' name='name'><br/>
網址:<input type='text' name='url'><br/>
<?php
$id = 'url';  
  
if ( 1 == count($_GET) ) {  
    $id = array_keys($_GET);  
    $id = $id[0]; 
}  
  
echo $id;  
?>  
輸入短網址:<input type='text' name='shorturl'><br/>

</form>

</body>
</html>