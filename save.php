<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","",'nff');

if($con)
{
	echo "";
}

else{
 echo mysqli_error($con);
}
$n=$_POST['name'];
$e=$_POST['email'];
$phn=$_POST['phn'];
$yr=$_POST['yr'];
$field=$_POST['field'];
$clg=$_POST['clg'];

$query="INSERT INTO register VALUES('$n','$e','$phn','$field','$clg','$yr')";
$data=mysqli_query($con,$query);
if($data)
{
?>
	<html>
	<head>
		<script type="text/javascript">
			alert("Registerd");
		</script></head></html>
		<?php
	header("refresh:0;url=index1.html");	
}
else{
	?>
	<html>
	<head>
		<script type="text/javascript">
			alert(" Not Registerd");
		</script></head></html>
<?php
header("refresh:0;url=index1.html");
}
	mysqli_close($con);
?>