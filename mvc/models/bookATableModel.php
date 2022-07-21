<?php
    class bookATableModel extends DB{
        private $name;
        private $sdt;
        private $email;
        private $guest_number;
        private $noti;

        public function getBookInfo()
        {
            if (!empty($_POST['get-name']) || !empty($_POST['get-phone-number']) || 
                !empty($_POST['get-email']) || !empty($_POST['get-number']) || !empty($_POST['get-notification'])) 
            {
                $name = $_POST['get-name'];
                $sdt = $_POST['get-phone-number'];
                $email = $_POST['get-email'];
                $guest_number = $_POST['get-number'];
                $noti = $_POST['get-notification'];

                echo $name;

                $qr = "INSERT INTO `bookrequest`
                       (`Name`, `Sdt`, `Email`, `NumofSeat`, `Text`, `Status`)
                       VALUES ('".$name."', '".$sdt."', '".$email."', '".$guest_number."', '".$noti."', '1');";
                $result = mysqli_query($this->conn, $qr);

                echo "<script type='text/javascript'>alert('Insert succesfull');</script>";
            }
        }

        public function setStatus()
        {

        }
    }
?>