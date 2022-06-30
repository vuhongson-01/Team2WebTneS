import React from "react";
import './Header.css';
import img from '../../assets/temp-header.png';

const Header = (lang) => (
    <div className="header" id="home">
        <div className="main-header">
            <div className="hsub0">
                <div className="hsub1">
                    <div className="__logo">
                        <a className="logo" href="./"><i class="fa-solid fa-utensils"></i><span className="nhoam-logo">Nhoàm</span></a>
                    </div>
                    <div className="slogan-content">
                        <span className="slogan">ĐƯA TINH HOA ẨM THỰC VIỆT VƯƠN RA THẾ GIỚI</span>      
                    </div>        
                </div>
            </div>            
        </div>

        <div className="temp-header">
            <div className="temp-header-container">
                <img src={img} className="temp-header-img"></img>
                <span className="quote">
                    <span className="b">ẨM THỰC</span><br></br>
                    <span className="w">VIỆT NAM</span><br></br>
                    <span className="w">ĐƯƠNG ĐẠI</span><br></br>
                </span>                
            </div>
        </div>
    </div>
);

export default Header;