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
    $Delete = $_POST['delete'];
    $Update = $_POST['update'];

    $sql = "INSERT INTO details (Name,Roll,Class,Division,Phone) VALUES ('$Name','$Roll','$Class',
    '$Div','$Phone')";
   
    if(!mysqli_query($con,$sql))
    {
    	echo 'Not Inserted';
        echo $Name;
        echo $Roll;
        echo $Class;
        echo $Div;
        echo $Email;
        echo $Phone;

    }
    else
        echo 'INSERTED';

    if(mysqli_query($con,$sql_delete))
     {
        echo 'Deleted';
        echo $Delete;
     }

    if(mysqli_query($con,$sql_update))
     {
        echo 'Updated:'+$Update;
        echo $Update;
     }
    header("refresh:10; url=index.html");

?>