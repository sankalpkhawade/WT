<?php
    $con = mysqli_connect('127.0.0.1','root','','practical');

    if(!$con)
    {
    	echo 'Not connected to Server';
    }

    if(!mysqli_select_db($con,'practical'))
    {
    	echo 'Database not selected';
    }	

    $Name  = $_POST['name'];
    $Roll  = $_POST['roll'];
    $Class = $_POST['class'];
    $Div   = $_POST['div'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Update = $_POST['update'];

     $sql_update= "UPDATE details SET Name='$Name',Roll='$Roll',Class='$Class',Division='$Div',Phone='$Phone' WHERE Name='$Update'";

    if(mysqli_query($con,$sql_update))
     {
        echo 'Updated:'+$Update;
        echo $Update;
     }
    header("refresh:10; url=index.html");

?>