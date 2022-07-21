<head>
    <link rel="stylesheet" href="./mvc/views/style/admin.css"/>
    <link rel="stylesheet" href="./mvc/views/style/map.css"/>
    <link rel="stylesheet" href="./mvc/views/style/table_process.css"/>
</head>
<body>
    <div class="admin">
        <div class="header-bar">
            <a class="logout-btn">LOGOUT</a>
        </div>

        <div class="state-admin">
            <div class="map-state">
                <?php include "./mvc/views/component/admin/table_map.php"; ?>
            </div>
            <div class="process-state">
                <?php include "./mvc/views/component/admin/table_process.php"; ?>
            </div>
        </div>
    </div>
</body>