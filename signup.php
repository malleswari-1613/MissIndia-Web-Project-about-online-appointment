
<?php
$connection=mysqli_connect("localhost","root","","Project");
if($connection)
{
	header('location:home.html');
}
else
{
	echo "error to create";
}

$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pwd'];
$cpwd=$_POST['Rpwd'];

$query="create table signUpDETAILS(Name varchar(20),EmailId varchar(40) PRIMARY KEY,PhoneNum varchar(11),password varchar(10),ConfirmPwd varchar(10));";
/*if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/
$query1="INSERT INTO signUpDETAILS VALUES(?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"sssss",$fname,$email,$phone,$pass,$cpwd);
	mysqli_stmt_execute($initialize);
	header('location:home.html');
}
else{
	echo "error".mysqli_error($connection);
}
/*$query2="SELECT *FROM signUpDETAILS;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
	while ($row=mysqli_fetch_assoc($check))
	{
		echo $row['fname']." ".$row['email']." ".$row['phone']." ".$row['pwd']." ".$row['Rpwd']."<br>";
	}
}
else
{
	echo "error".mysqli_error($connection);
}*/
?>

