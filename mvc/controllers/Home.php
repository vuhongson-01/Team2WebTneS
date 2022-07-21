<?php
    class Home extends Controller
    {
        function HomePage()
        {
            $this->view("index");
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
            $this->view("bookATable",[]);
            $khach = $this->model("bookATableModel");
            $khach->getBookInfo();
            $this->view("bookATable",[]);
        }

        function printInfo(){
            
        }
    }
?>