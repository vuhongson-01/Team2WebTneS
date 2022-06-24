<?php
    $txtID = $_POST['txtID'];
    $txtTitle = $_POST['txtTitle'];
    $txtDes = $_POST['txtDes'];

    if(!empty($txtID) || !empty($txtTitle) || !empty($txtDes)){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "businesslisting";
                
        $conn = mysqli_connect($server, $user, $pass, $dbName);

        if($conn->connect_error){
            die("Cannot connect to $server using $user");
        }else{
            $sql = "INSERT INTO categories (Category_ID, Title, Description) VALUES ('$txtID', '$txtTitle', '$txtDes')";

            if(mysqli_query($conn, $sql)){
                echo "Data stored successfully";
            }else{
                echo "ERROR: Error stupid";
            }
        }
    }else{
        echo "All field are required";
        die();
    }
?>