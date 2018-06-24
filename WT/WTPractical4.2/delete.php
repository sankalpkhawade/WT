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

    $Delete  = $_POST['delete'];

    $sql_delete = "DELETE FROM details WHERE Name = '$Delete'";
    
    if(mysqli_query($con,$sql_delete))
     {
        echo 'Deleted:';
     }
    header("refresh:10; url=index.html");

?>