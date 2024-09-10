<?php
$connection= mysqli_connect("localhost","root","root","hotel");
if(!$connection)
{
	echo "error:".mysqli_connect_error();
}
else
{
	echo "connection successfully"."<br>";
}

/*$database="CREATE DATABASE hotel;";
if(mysqli_query($conn,$database))
{
	echo "Database Created"."<br>";
}
else
{
	echo "Error Creationg Database:".mysqli_error($conn)."<br>";
}
$query="CREATE TABLE bookss(firstname VARCHAR(15),lastname VARCHAR(15),phno INT,email VARCHAR(20),Dateofarrival DATE, dateofdeparture DATE,noofguests INT,roomtype VARCHAR(15));";
if (mysqli_query($connection,$query))
{
	echo "Table Is Created"."<br>";
}
else
{
	echo "Error Creating Table::".mysqli_error($connection)."<br>";
}

$fname=mysqli_real_escape_string($connection,$_post['Name'];
$lname=mysqli_real_escape_string($connection,$_post['lName'];
$pnumber=mysqli_real_escape_string($connection,$_post['phone_no'];
$mail=mysqli_real_escape_string($connection,$_post['email'];
$ddate=mysqli_real_escape_string($connection,$_post['Text'];
$arrivdate=mysqli_real_escape_string($connection,$_post['dText'];
$nogust=mysqli_real_escape_string($connection,$_post['country'];
$roomtype=mysqli_real_escape_string($connection,$_post['roomtype'];
//to insert values
$query1="INSERT INTO bookss  VALUES ('$fname','$lname','$pnumber','$mail','$ddate','$arrivdate','$nogust','$roomtype');";
if(mysqli_query($connection,$query1))
{
	echo "recored inserted";
}
else
{
	echo "error:".mysqli_error($connection)."<br>";
}
/*?>
<table border=1>
	<tr>
	<td>FIRSTNAME</td>
	<td>LAStNAME</td>
	<td>PHNO</td>
	<td>EMAIL</td>
	<td>DATEOFARRIVAL</td>
	<td>DATEOFDEPARTURE</td>
	<td>NOOFGUESTS</td>
	<td>ROOMTYPE</td>
	</tr>
<?php
$query2="SELECT *FROM bookss;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{	
	while($row=mysqli_fetch_assoc($check))
	{
	?>
	<tr>
	<td><?php echo $row['firstname'];?></td>
	<td><?php echo $row['lastname'];?></td>
	<td><?php echo $row['phno'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['dateofarrival'];?></td>
	<td><?php echo $row['dateofdeparture'];?></td>
	<td><?php echo $row['noofguests'];?></td>
	<td><?php echo $row['roomtype'];?></td>
	</tr>
<?php
}
}
else{
	echo"table is empty";
}*/
?>
