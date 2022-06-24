<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="public/css/index.css">
        <link rel="stylesheet" href="public/css/product.css">
        <link rel="stylesheet" href="public/css/list-tag.css">
        <link rel="stylesheet" href="public/css/home.css">
        <link rel="shortcut icon" href="asset/Logo_Ananas.png">
        <link rel="stylesheet" href="public/css/navbar.css">
        <link rel="stylesheet" href="public/css/footer.css">
        <link rel="stylesheet" href="public/css/product-detail.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    </head>
    <body>
        <?php 
            include_once("controller/Controller.php");

            include_once("view/navbar.php");    
            
            $controller = new Controller();
            $controller->__invoke();

            include_once("view/footer.php");
        ?> 
        
        <script src="public/js/expand-list-tag.js"></script>
        <script src="public/js/mark-attribute.js"></script>
    </body>
</html>
