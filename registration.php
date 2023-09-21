
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

$name=$_POST['name'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$comment=$_POST['Comment'];


/*$query="create table DETAILS(BeauticianName varchar(20),CustemerFirstName varchar(20),CustemerLastName varchar(20),EmailId varchar(40) PRIMARY KEY,PhoneNum varchar(11), Date varchar(20), Time varchar(20), Comment varchar(50));";
if(mysqli_query($connection,$query))
{
	echo "Table created";
}
else
{
	echo "error".mysqli_error($connection);
}*/
$query1="INSERT INTO DETAILS VALUES(?,?,?,?,?,?,?,?);";
$initialize=mysqli_stmt_init($connection);
if(mysqli_stmt_prepare($initialize,$query1))
{
	mysqli_stmt_bind_param($initialize,"ssssssss",$name,$fname,$lname,$email,$phone,$date,$time,$comment);
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

