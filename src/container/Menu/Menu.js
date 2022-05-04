import React from "react";
import menuImg from '../../assets/wine-menu.jpg'

import './Menu.css';

const MenuOption = () => (
    <div className="tmp-menu-option">
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">Thực đơn gọi món</span>
            </div>
        </div>  
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">Thực đơn gọi món</span>
            </div>
        </div>        
        <div className="menu-list">
            <div className="menu-i">
                <span className="menu-topic">Thực đơn gọi món</span>
            </div>
        </div>  
    </div>

);

const Menu = () => (
    <div className="menu" id="menu">
        <div className="img">
            <div className="hsub0">
                <h1 className="menu-title">Menu</h1>
            </div>
        </div>
        <div className="menu-option">
            <h2 className="menu-sub-title">On the menu</h2>
            <div className="menu-list-option">
                <MenuOption />
            </div>
        </div>
    </div>
);

export default Menu;