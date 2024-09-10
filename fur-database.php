<?php
include 'connect.php';
$name=mysqli_real_escape_string($connection,$_POST['name']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password=mysqli_real_escape_string($connection,$_POST['password']);
//$name=$_POST['uname'];
//$password=$_POST['pwd'];
if($connection)
{
  echo "connection established.'<br>' ";

}
/*$query="CREATE TABLE pro1(username VARCHAR(15)   NOT NULL, email VARCHAR(50) NOT NULL ,password VARCHAR(15) NOT NULL);";
if(mysqli_query($connection,$query))
{
    echo "table created"."<br>";
}
else
{
    echo "table not created.<br>";
    echo "error:".mysqli_error($connection);
}*/
$query2="INSERT INTO pro1 VALUES('$name','$email','$password');";
if(mysqli_query($connection,$query2))


{
     header("Location:project1.html");
}
else
{
    echo "error:".mysqli_error($connection);
}

/*$query2="SELECT * FROM pro1;";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['username']."   ".$row['email']. " ".$row['password']."<br>";
}
else
{
    echo"no records"."<br>";
}*/
/*$count=0;
$query3="SELECT * FROM pro1;";
$check=mysqli_query($connection,$query3);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        {
       
        if($row['email']==$email)
        {
        	if($row['password']==$password)
        	{
        			if($row['username']==$name)
		 		 $count=500;
		 		 else
		 		 $count=200;
      		}
      		
      		else 
      		{
        	 $count=100;
    		}
        
        	}
        }
        echo $count;
  }
if($count==0)
{
	$query2="INSERT INTO pro1 VALUES('$name','$email','$password');";
	$insert=mysqli_query($connection,$query2);
	$to=$email;
	$subject="Mail From ShareKnowledge";
	$txt="Thank you";
	$headers="From: shareknowledge445@gmail.com". "\r\n"."CC:r180253@rguktrkv.ac.in";
	//echo "sdfghjsdfghjksdfghjasdfgh2345678";
	$send_mail=mail($to,$subject,$txt,$headers);
	if($send_mail)
	{
	 echo "mail sending is success";
	 }*/
	/*else
	 {
	 	echo "oops!";
	 }*/
	 	/*header("Location:thankyou.html");
	 
}
else if($count==200)
{
header("Location:login3.html");
}
else if ($count==100)
{
 header("Location:login2.html");
 }
else if($count==500){

header("Location:logina.html");
}*/
?>
