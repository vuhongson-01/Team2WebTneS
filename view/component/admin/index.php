<html>
    <head>
        <link rel="stylesheet" href="./view/style/admin.css" />
    </head>
    <body>
        <div class="admin">
            <div class="admin-header">
                <a class="logout-btn">LOGOUT</a>
            </div>
            <div class="admin-state">
                <div class="table-map">
                    <?php include "./view/component/admin/map.php";?>
                </div>
                <div class="table-process">
                    <?php include "./view/component/admin/table_process.php";?>
                </div>
            </div>
        </div>    
    </body>    
</html>


