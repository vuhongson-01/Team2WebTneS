<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Listing</title>
</head>
<style>
    fieldset{
        text-align: center;
        font-size: 25px;
        font-family: monospace;
    }
    legend{
        background-color: #d96459;
        color: white;
        padding: 5px 10px;
        font-weight: bold;
    }
    #guide {
        width: 90%;
        text-align: left;
    }
    #table{
        border-collapse: collapse;
        width: 100%;
        font-family: monospace;
        font-size: 20px;
        text-align: center;
        float: right;
        padding: 5px;
    }
    th, td {
        padding: 15px;
    }
    th{
        background-color: #d96459;
        color: white;
        text-align: center;
    }
    #select_Category{
        float: left;
        width: 30%;

    }
    #business_listing{
        float: right;
        width: 70%;
    }
    #home_category{
        /* margin-bottom: 0%; */
        /* right: 500px; */
        width: 90%;
        background-color: #d96459;
        color: white;
        text-align: center;
        padding: 5px 0px;
        font-weight: bold;
    }
    #attribute {
        text-align: left;
        font-weight: bold;
        font-size: 22px;
    }
    #category_menu {
        width: 700px;
        height: 200px;
        overflow-y: auto;
    }

    #category_menu select {
        font-family: monospace;
        background-color: #eee;
        color: black;
        display: block;
        /* padding: 12px; */
        text-decoration: none;
    }
    #categoriess{
        width: 90%;
        display: block;
        font-size: 20px;
        font-family: monospace;
    }

    #category_menu select.active {
        background-color: #04AA6D;
        color: white;
    }
    button{
        width: 200px;
        font-weight: bold;
        font-size: 20px;
        font-family: monospace;
        border-radius: 4px;
        padding: 3px 3px;
        background-color: #d96459;
        color: white;
        text-align: center;
        transition-duration: 0.2s;
        float: left;
    }
    button:hover{
        background-color: #bb372a;
    }
    tr:nth-child(even){background-color: #f2f2f2;}
    td:hover{background-color: #ddd;}
</style>
<body>  
    <fieldset>
        <legend>Business Listings</legend>
        <form action="" method="POST">
        <div id = "select_Category">
            <p id = "guide">Select category to find business</p>
            <div id = "home_category">Select Category</div>
            <!-- <div id = "category_menu"> -->
                <select name='category' id="categoriess">
                    <?php
                        $server = "localhost";
                        $user = "root";
                        $pass = "";
                        $dbName = "businesslisting";
                    
                        $conn = mysqli_connect($server, $user, $pass, $dbName);

                        if($conn->connect_error){
                            die("Cannot connect to $server using $user");
                        }

                        $sql = "SELECT * FROM categories";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row["Category_ID"].">".$row["Title"]. "</option>";
                            }
                        }else{
                            echo "0 result";
                        }

                        $conn->close();
                    ?>
                </select>
            <!-- </div> -->
            <br>
            <div id = "add_btn">
                <button type = "submit">Find Business</button>
            </div>
        </div>
        </form>
        <div id = "business_listing">
            <table id = "table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Telephone</th>
                    <th>URL</th>
                </tr>
                <tr>
                <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $dbName = "businesslisting";
                
                    if(isset($_POST['category'])){
                        $conn = mysqli_connect($server, $user, $pass, $dbName);
                        $category = $_POST['category'];

                        if($conn->connect_error){
                            die("Cannot connect to $server using $user");
                        }

                        $sql = "SELECT * from businesses as BS, biz_categories as BI
                                where BS.Business_ID = BI.Business_ID and BI.Category_ID = '$category'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr><td>". $row["Business_ID"]. "</td><td>". $row["Name"]. "</td><td>". $row["Address"]. "</td><td>"
                                . $row["City"]. "</td><td>". $row["Telephone"]. "</td><td>". $row["URL"]. "</td></tr>";
                            }
                        }else{
                            echo "0 result";
                        }

                        $conn->close();
                    }else{
                        echo "Please choose category";
                    }
                ?>
                </tr>
            </table>
        </div>
    </fieldset>
</body>
</html>