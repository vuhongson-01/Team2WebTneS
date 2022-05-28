<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Adminstration</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color: #d96459;
            color: white;
            text-align: center;
        }
        fieldset{
            text-align: center;
            font-size: 25px;
            font-family: monospace;
        }
        legend {
            background-color: #d96459;
            color: white;
            padding: 5px 10px;
        }
        input[type = text]{
            width: 90%;
            padding: 5px 5px;
            border-radius: 4px;
            margin: 2px 0px;
        }
        button{
            width: 100%;
            font-size: 20px;
            font-weight: bold;
            font-family: monospace;
            border-radius: 4px;
            padding: 3px 3px;
            background-color: #d96459;
            color: white;
            text-align: center;
            transition-duration: 0.2s;
        }
        button:hover{
            background-color: #bb372a;
        }
        tr:nth-child(even){background-color: #f2f2f2;}
    </style>
</head>
<body>
    <form action="insertAdmin.php" method="POST">
        <fieldset>
            <legend><b>Category Adminstration</b></legend>
            <table>
                <tr>
                    <th>Cat ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $dbName = "businesslisting";
                
                    $conn = mysqli_connect($server, $user, $pass, $dbName);

                    if($conn->connect_error){
                        die("Cannot connect to $server using $user");
                    }

                    $sql = "SELECT Category_ID, Title, Description from categories";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>". $row["Category_ID"]. "</td><td>". $row["Title"]. "</td><td>". $row["Description"]. "</td></tr>";
                        }
                    }else{
                        echo "0 result";
                    }

                    $conn->close();
                ?>
                <tr>
                    <td><input type = "text" name = "txtID" id = "txtID" required></td>
                    <td><input type = "text" name = "txtTitle" id = "txtTitle" required></td>
                    <td><input type = "text" name = "txtDes" id = "txtDes" required></td>
                </tr>
                <tr>
                    <td><button type = "submit">Add Category</button></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>