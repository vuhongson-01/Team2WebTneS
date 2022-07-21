<?php
    class SinhVienModel extends DB
    {
        public function GetSV()
        {
            return "Nguyen Minh Hoang";
        }

        public function Tong($a, $b)
        {
            return $a + $b;
        }

        public function SinhVien()
        {
            $qr = "select * from sinhvien";
            return mysqli_query($this->conn, $qr);
        }
    }
?>