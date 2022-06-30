import React from "react";

import './ChangeLanguage.css';


function changeLanguage(lang) {
    if (lang === "vi");
    if (lang === "en");
}
const ChangeLanguage = () => (
    <div className="translate-btn">
        <a className="__vi" onClick={changeLanguage("vi")}>vi</a>
        <div className="separate-line"></div>
        <a className="__en" onClick={changeLanguage("en")}>en</a>
    </div>
);

export default ChangeLanguage;