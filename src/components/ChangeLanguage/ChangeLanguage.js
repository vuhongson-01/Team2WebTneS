import React from "react";

import './ChangeLanguage.css';

const ChangeLanguage = ({setChangeLanguage}) => {

    return (
        <div className="translate-btn">
            <a className="__vi" onClick={setChangeLanguage("vi")}>vi</a>
            <div className="separate-line"></div>
            <a className="__en" onClick={setChangeLanguage("en")}>en</a>
        </div>);
    };

export default ChangeLanguage;