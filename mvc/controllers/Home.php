<?php
    class Home extends Controller
    {
        function HomePage()
        {
            $this->view("index");
            $khach = $this->model("bookATableModel");
            $khach->getBookInfo();
        }

        function SayHello()
        {    
            //Model
            $teo = $this->model("SinhVienModel");

            //View
            $this->view("screen1", [
                "Page" => "news",
                "SV" => $teo->SinhVien()
            ]);
        }

        function BookATable()
        {
            $this->view("reserve",[]);
            $khach = $this->model("bookATableModel");
            $khach->getBookInfo();
            $this->view("reserve",[]);
        }

        function printInfo()
        {
            
        }
    }
?>