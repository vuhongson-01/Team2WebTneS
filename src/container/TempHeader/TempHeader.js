import React from "react";
import './TempHeader.css';
import img from '../../assets/temp-header.jpg';

const TempHeader = () => (
    <div className="temp-header">
        <img src={img} className="temp-header-img"></img>
        <span className="quote">
            <span className="b">ẨM THỰC</span><br></br>
            <span className="w">VIỆT NAM</span><br></br>
            <span className="w">ĐƯƠNG ĐẠI</span><br></br>
        </span>
    </div>

);

export default TempHeader;