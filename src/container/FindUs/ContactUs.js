import React from "react";

import './ContactUs.css';
import fbicon from '../../assets/facebook.svg';
import insicon from '../../assets/instagram.svg';
import tripicon from '../../assets/tripadvisor.svg';

const ContactUs = () => (
    <div className="contact-boundary" id="contact-us">
        <div className="social-media-icon">
            <a href="www.facebook.com"><img src={fbicon} height="60px"></img></a>
            <a href="www.instagram.com"><img src={insicon} height="60px"></img></a>
            <a href="www.tripadvisor.com"><img src={tripicon} height="60px"></img></a>
        </div>
        <div className="official-information">
            <i>
                <div>NHOÀM'S RESTAURANT</div>
                <div>SĐT: +84 836 266 866</div>
                <div>Email: nhoam.official@gmail.com</div>
                <div>Giấy CNĐKDN: 0313458528-001 - Ngày cấp: 21/1/2017</div>
                <div>Cơ quan cấp: Phòng Đăng ký kinh doanh - Sở kế hoạch và Đầu tư TP. Hà Nội</div>
                <div>Địa chỉ đăng ký kinh doanh: 1 Đại Cồ Việt, Quận Hai Bà Trưng, Tp. Hà Nội, Việt Nam</div>  
            </i> 
        </div>
        <hr></hr>
        <div className="copyright">
            Nhoàm's Restaurant <i class="fa-solid fa-copyright"></i>
        </div>
    </div>
);

export default ContactUs;