import React, { useEffect, useState } from "react";
import AboutUs from "./container/AboutUs/AboutUs";
import Header from "./container/Header/Header";
import Menu from "./container/Menu/Menu";
import BookATable from "./container/BookATable/BookATable";
import ContactUs from "./container/ContactUs/ContactUs";
import MoveTop from "./components/MoveTop/MoveTop";
import Navbar from './components/Navbar/Navbar';
import LanguageTranslate from "./components/ChangeLanguage/ChangeLanguage";
import preLoader from "./components/preLoader";
import './App.css';

function App() {

    const [changeLanguageFlag, setChangeLanguageFlag] = useState("vi");
    const [isLoading, setLoading] = useState(false);
    const current_lang = 0;

    const vi = {
        slogan: "Đưa tinh hoa ẩm thực Việt vươn ra thế giới",
        navbar: {
            home: "Trang chủ",
            about: "Về chúng tôi",
            menu: "Thực đơn",
            book: "Đặt hàng",
            location: "Địa chỉ"
        },
        quote: "Ẩm thực việt nam đương đại",
        menu: {
            oder: "thực đơn đặt món",
            lunch: "thực đơn bữa trưa",
            dinner: "thực đơn bữa tối",
            wine: "thực đơn rượu",
            drink: "thực đơn đồ uống"
        },
        reserve:{
            location: "1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội",
            lunch: "Bữa trưa",
            dinner: "Bữa tối",
            lunch_time: "Thứ 2 - Thứ 6 11:30 - 15:00",
            dinner_time: "Thứ 2 - Thứ 6 17:30 - 23:00",
            phone: "+84 836 266 866",
            note1: "Vui lòng gọi đến số điện thoại",
            note2: "hoặc để lại thông tin và mục dưới đây, nhân viên nhà hàng sẽ liên hệ lại sau ít phút",
            contact_info:{
                name_placeholder: "Họ và tên",
                phone_placeholder: "Số điện thoại",
                email_placeholder: "Email",
                total_placeholder: "Số lượng người",
                note_placeholder: "Ghi chú",
            },
            verify_confirm: "Chấp nhận điều khoản bảo mật",
            send_btn: "Gửi",            
        },
        footer: {
            name: "Nhoàm Restaurant",
            phone: "SĐT: +84 836 266 866",
            email: "Email: nhoam.offical@gmail.com",
            cer: "Giấy CNĐKDN: 0313458528-001 – Ngày cấp: 21/1/2017",
            ref: "Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP. Hà Nội",
            loc: "Địa chỉ đăng ký kinh doanh: 1 Đại Cồ Việt, Quận Hai Bà Trưng, Tp. Hà Nội, Việt Nam"
        }
    }
    const en = {
        slogan: "Bringing the quintessence of Vietnamese cuisine to the world",
        navbar: {
            home: "home",
            about: "about us",
            menu: "menu",
            book: "reserve",
            location: "location"
        },
        quote: "Contemporary Vietnamese cuisine",
        menu: {
            oder: "order menu",
            lunch: "lunch menu",
            dinner: "dinner menu",
            wine: "wine menu",
            drink: "drinking menu"
        },
        reserve:{
            location: "1 Đai Co Viet, Hai Ba Trung, Ha Noi",
            lunch: "Lunch",
            dinner: "Dinner",
            lunch_time: "Mon - Sun 11:30 AM - 03:00 PM",
            dinner_time: "Mon - Sun 5:30 PM - 23:00 PM",
            phone: "+84 836 266 866",
            note1: "Please call to phone number:",
            note2: "or gived me your information, staff will call to you:",
            contact_info:{
                name_placeholder: "Your name",
                phone_placeholder: "Your phone number",
                email_placeholder: "Your Email",
                total_placeholder: "Total",
                note_placeholder: "Give us note",
            },
            verify_confirm: "Confirm policy...",
            send_btn: "Send",            
        },
        footer: {
            name: "Nhoàm Restaurant",
            phone: "SĐT: +84 836 266 866",
            email: "Email: nhoam.offical@gmail.com",
            cer: "Giấy CNĐKDN: 0313458528-001 – Ngày cấp: 21/1/2017",
            ref: "Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu tư TP. Hà Nội",
            loc: "Địa chỉ đăng ký kinh doanh: 1 Đại Cồ Việt, Quận Hai Bà Trưng, Tp. Hà Nội, Việt Nam"
        }
    }

    const lang = [vi, en];

    useEffect(()=>
        console.log("change language")
    ,[changeLanguageFlag]);


    if (isLoading){
        return <preLoader />
    }
    return(
        <div id="container">
            <LanguageTranslate setChangeLanguage={setChangeLanguageFlag}/>
            <MoveTop />
            <Navbar lang={changeLanguageFlag==="vi"?vi:en}/>
            <Header lang={changeLanguageFlag==="vi"?vi:en}/>
            <AboutUs lang={changeLanguageFlag==="vi"?vi:en}/>
            <Menu lang={changeLanguageFlag==="vi"?vi:en}/>
            <BookATable lang={changeLanguageFlag==="vi"?vi:en}/>
            <ContactUs lang={changeLanguageFlag==="vi"?vi:en}/>
        </div>
    )   
}

export default App;