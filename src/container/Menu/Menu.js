import React from "react";
import menuImg from '../../assets/wine-menu.jpg'
import winemenu from '../../assets/menu/wine.pdf'

import './Menu.css';

const MenuOption = () => (
    <div className="tmp-menu-option">
        <div className="menu-list">
            <div className="menu-i">
                <a href={winemenu} target="_blank"><span className="menu-topic">ORDER MENU</span></a>
            </div>
        </div>  
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">LUNCH MENU</span>
            </div>
        </div>        
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">DINNER MENU</span>
            </div>
        </div>  
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">WINE MENU</span>
            </div>
        </div>  
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">DRINK MENU</span>
            </div>
        </div>  
    </div>
);

const Menu = (lang) => (
    <div className="menu" id="menu">
        <div className="img">
            {/* <div className="hsub0">
                <h1 className="menu-title">Menu</h1>
            </div> */}
        </div>
        <div className="menu-option">
            <h2 className="menu-sub-title">MENU</h2>
            <div className="menu-list-option">
                <MenuOption />
            </div>
        </div>
    </div>
);

export default Menu;