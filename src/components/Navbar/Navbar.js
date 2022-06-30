import React from 'react';

import './Navbar.css';

function closeMenu(){
    document.getElementById('check-menu').checked = false;
}
const Navbar = ({lang}) => (  
    <nav className='nav-bar'>
        {/* <hr className='line'></hr>
        <input type="checkbox" id='check-menu'></input>
        <label for="check-menu" className='menu-btn'><i class="fa-solid fa-angle-down"></i></label> */}
        <ul className='navbar-link'> 
            <li className='navbar-option home'><a href='#home' onClick={closeMenu}>{lang.navbar.home}</a></li>
            <li className='navbar-option'><a href='#about-us' onClick={closeMenu}>About Us</a></li>
            <li className='navbar-option'><a href='#menu' onClick={closeMenu}>Menu</a></li>
            <li className='navbar-option'><a href='#book-a-table' onClick={closeMenu}>Book A Table</a></li>
            <li className='navbar-option'><a href='#contact-us' onClick={closeMenu}>Contact Us</a></li>
            {/* <input type="checkbox" id='close-menu'></input>
            <label for="close-menu" className='close-menu-btn' onClick={closeMenu}><i class="fa-solid fa-angle-up"></i></label> */}
        </ul>            
    </nav>
);


export default Navbar;
