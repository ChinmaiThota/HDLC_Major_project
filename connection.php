<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST["name"];
$name1=$_POST["name1"];
$name2=$_POST["name2"];
$dob=$_POST["dob"];
$Year=$_POST["Year"];
$rad1=$_POST["rad1"];
$cgpa=$_POST["cgpa"];
$mail=$_POST["mail"];
$pwd=$_POST["pwd"];
$num=$_POST["num"];

    }
// database details
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "test";

    // creating a connection
    $con = new mysqli($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if ($con -> connect_error)
    {
        die("Connection failed!" . $con->connect_error);
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO major (name,name1,name2,dob,Year,rad1,cgpa,mail,pwd,num) 
    VALUES('$name', '$name1', '$name2', '$dob', '$Year', '$rad1', '$cgpa', '$mail', '$pwd', '$num')";
  
    // send query to the database to add values and confirm if successful

    if($con -> query($sql) === true)
    {
        echo "Successfully submitted";
    }
    else
	{
		
		echo "Error" .$sql . "<br>" .$con->error;
	}
	
  
    // close connection
    $con->close();
?>
