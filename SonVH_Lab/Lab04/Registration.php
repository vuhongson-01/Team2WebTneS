<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration</title>
    <style>
        fieldset{
            /* text-align: center; */
            font-size: 25px;
            font-family: monospace;
        }
        legend{
            text-align: center;
            background-color: #d96459;
            color: white;
            padding: 5px 10px;
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

        input[type = text]{
            padding: 5px 5px;
            border-radius: 4px;
            align-content: center center;
            width: 100%;
        }
        #select_categories {
            width: 40%;
            float: left;
        }
        #business_info {
            width: 60%;
            float: right;
            /* background-color: #d96459; */
            grid-template-columns: 25% 75%;
            display: grid;

        }
        #guide {
            width: 90%;
            text-align: left;
        }
        #input {
            margin: auto 10px;
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
        }
        button:hover{
            background-color: #bb372a;
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
        tr:nth-child(even){background-color: #f2f2f2;}
    </style>
</head>
<body>
    <form action="insertBusiness.php" method="POST">
    <fieldset>
        <legend><b>Business Registration</b></legend>
        <div id = "select_categories">
            <p id = "guide">Click on one or control-click on mutiple categories</p>
            <div id = "home_category">Select Category</div>
            <!-- <div id = "category_menu"> -->
                <select name='categories[]' id="categoriess" multiple>
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
                <button type = "submit">Add Category</button>
            </div>
        </div>

        <div id = "business_info">
            <div id = "attribute"><p>Business Name:</p></div>
            <div id = "input">
                <input type = "text" name = "txtName" id = "txtName" required>
            </div>
            <div id = "attribute"><p>Address:</p></div>
            <div id = "input">
                <input type = "text" name = "txtAddress" id = "txtAddress" required>
            </div>
            <div id = "attribute"><p>City:</p></div>
            <div id = "input">
                <input type = "text" name = "txtCity" id = "txtCity" required>
            </div>
            <div id = "attribute"><p>Telephone:</p></div>
            <div id = "input">
                <input type = "text" name = "txtTelephone" id = "txtTelephone" required>
            </div>
            <div id = "attribute"><p>URL:</p></div>
            <div id = "input">
                <input type = "text" name = "txtURL" id = "txtURL" required>
            </div>
        </div>
    </fieldset>
    </form>
</body>
</html>