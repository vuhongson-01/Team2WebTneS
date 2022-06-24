<?php
    $txtName = $_POST['txtName'];
    $txtAddress = $_POST['txtAddress'];
    $txtCity = $_POST['txtCity'];
    $txtTelephone = $_POST['txtTelephone'];
    $txtURL = $_POST['txtURL'];

    if(!empty($txtName) || !empty($txtAddress) || !empty($txtCity) || !empty($txtTelephone)
    || !empty($txtURL) || !empty($categories)){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $dbName = "businesslisting";
                
        $conn = mysqli_connect($server, $user, $pass, $dbName);

        if($conn->connect_error){
            die("Cannot connect to $server using $user");
        }else{
            //Insert into businesses Table
            $sqlBusiness = "INSERT INTO businesses (Name, Address, City, Telephone, URL) 
                VALUES ('$txtName', '$txtAddress', '$txtCity', '$txtTelephone', '$txtURL')";

            if(mysqli_query($conn, $sqlBusiness)){
                echo "Data stored successfully Businesses";
            }else{
                echo "ERROR: Error at Business";
            }

            //Insert into biz_categories Table
            $findBusinessID = "SELECT Business_ID from businesses where Name = '$txtName'";
            $result = $conn->query($findBusinessID);
            $businessID = "";
            while($row = $result->fetch_assoc()){
                $businessID = $row["Business_ID"];
            }

            foreach($_POST['categories'] as $category){
                $sqlBizCat = "INSERT INTO biz_categories (Business_ID, Category_ID)
                VALUES ('$businessID', '$category')";

                if(mysqli_query($conn, $sqlBizCat)){
                    echo "Data stored successfully BizCat";
                }else{
                    echo "ERROR: Error at Biz_Cat";
                }
            }
        }
    }else{
        echo "All field are required";
        die();
    }
?>