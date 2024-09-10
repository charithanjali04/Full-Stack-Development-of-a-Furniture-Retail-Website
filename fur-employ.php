<?php
include 'connect.php';
$id=mysqli_real_escape_string($connection,$_POST['uid']);
$name=mysqli_real_escape_string($connection,$_POST['uname']);
$manager_id=mysqli_real_escape_string($connection,$_POST['mag_id']);
$doj=mysqli_real_escape_string($connection,$_POST['date']);
$city=mysqli_real_escape_string($connection,$_POST['city']);
$project=mysqli_real_escape_string($connection,$_POST['p_name']);
$sal=mysqli_real_escape_string($connection,$_POST['sal']);
if($connection)
{
   echo "connection established.'<br>' ";

}
/*$query="CREATE TABLE employe(EMP_ID INT NOT NULL,NAME VARCHAR(15),MANAGER_ID INT,DATE_OF_JOINING DATE,CITY VARCHAR(15),PROJECT CHAR(2),SALARY BIGINT);";
if(mysqli_query($connection,$query))
{
    echo "table created"."<br>";
}
else
{
    echo "table not created.<br>";
    echo "error:".mysqli_error($connection);
}*/
$query_="INSERT INTO employee VALUES('$id','$name','$manager_id','$doj','$city','$project','$sal');";
if(mysqli_query($connection,$query_))
{
    echo "record inserted.<br>";
}
else
{
    echo "error:".mysqli_error($connection);
}
/*$query1="SELECT * FROM employe;";
$check=mysqli_query($connection,$query1);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['EMP_ID']."    ".$row['NAME']."    ".$row['MANAGER_ID']."     ".$row['DATE_OF_JOINING']."    ".$row['CITY']."    ".$row['PROJECT']."     ".$row['SALARY']."<br>";
}
else
{
    echo"no records"."<br>";
}
$query2="select count(emp_id) from employe where PROJECT='P1';";
$check=mysqli_query($connection,$query2);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['count(emp_id)']."<br>";
}
else
{
    echo"no records"."<br>";
}
$query3="SELECT NAME FROM employe WHERE CITY='HYDERABAD' AND MANAGER_ID='452';";
$check=mysqli_query($connection,$query3);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['NAME']."<br>";
}
else
{
    echo"no records"."<br>";
}
$query4=" SELECT NAME FROM employe WHERE NAME LIKE '__hn%';";
$check=mysqli_query($connection,$query4);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['NAME']."<br>";
}
else
{
    echo"no records"."<br>";
}
$query5="select * from employe limit 1,2;";
$check=mysqli_query($connection,$query5);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['EMP_ID']."    ".$row['NAME']."    ".$row['MANAGER_ID']."     ".$row['DATE_OF_JOINING']."    ".$row['CITY']."    ".$row['PROJECT']."     ".$row['SALARY']."<br>";
}
else
{
    echo"no records"."<br>";
}
$query6="select PROJECT,count(EMP_ID) from employe GROUP BY PROJECT order by count(EMP_ID) desc;";
$check=mysqli_query($connection,$query6);
if(mysqli_num_rows($check))
{
        while($row=mysqli_fetch_assoc($check))
        echo $row['PROJECT']."     ".$row['count(EMP_ID)']."<br>";
}
else
{
    echo"no records"."<br>";
}*/
?>
