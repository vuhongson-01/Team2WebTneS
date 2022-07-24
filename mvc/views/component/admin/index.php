<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./mvc/views/style/admin.css" />
    <link rel="stylesheet" href="./mvc/views/style/map.css" />
    <link rel="stylesheet" href="./mvc/views/style/table_process.css" />
</head>

<body>
    <div class="admin">
        <div class="header-bar">
            <a class="logout-btn">LOGOUT</a>
        </div>

        <div class="state-admin">
            <div class="map-state">
                <div class="status">
                    <div class="status_">
                        <div class="status-color empty">
                        </div>
                        <span>Trống</span>
                    </div>
                    <div class="status_">
                        <div class="status-color picked">
                        </div>
                        <span>Đặt chỗ</span>
                    </div>
                    <div class="status_">
                        <div class="status-color done">
                        </div>
                        <span>Có khách</span>
                    </div>
                    <div class="status_">
                        <div class="status-color late">
                        </div>
                        <span>Trễ</span>
                    </div>
                </div>
                <?php include "./mvc/views/component/admin/table_map.php"; ?>
            </div>
            <div class="process-state">
                <?php include "./mvc/views/component/admin/table_process.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>