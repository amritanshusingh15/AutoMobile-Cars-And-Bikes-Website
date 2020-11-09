<?php
$user=$_GET["name"];
$pass=$_GET["pass"];
$servername="localhost";
$username="root";
$password="password";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn)
{
	die("Failed");
}
echo "SUCCESS";
echo "<br>";
$sql=mysqli_select_db($conn,"DBMS");
if(!$sql)
{
	die("FAILED");
}
echo "SUCCESS SELECTED DATABASE";
echo '<br>';
//$sql="create table adminLogin (email varchar(255),password varchar(255));";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED");
//}
//echo "SUCCESS CREATED TABLE";
//echo '<br>';
//$sql="insert into adminLogin values('jgoel92@gmail.com','123456');";
//$check=mysqli_query($conn,$sql);
//if(!$check)
//{
	//die("FAILED".mysqli_error($conn));
//}
//echo "SUCCESS INSERTED DATA";
//echo '<br>';
//$username="jgoel92@gmail";
$sql="Select * from adminLogin where email='$user' and password='$pass';";
$check=mysqli_query($conn,$sql);
$x=0;
while($row=mysqli_fetch_array($check))
{
	$x=$x+1;
}
//echo "$x";
if($x!=0)
{
	echo " SUCCESS in ADMIN LOGIN";
}
else
{
	echo "FAILED in ADMIN LOGIN";
}
mysqli_close($conn);
?>