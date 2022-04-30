import React from 'react';

import './Navbar.css';

const Navbar = () => (  
    <nav className='nav-bar'>
        <hr className='line'></hr>
        <ul className='navbar-link'>
            <li className='navbar-option'><a href='#home'>Home</a></li>
            <li className='navbar-option'><a href='#about-us'>About Us</a></li>
            <li className='navbar-option'><a href='#menu'>Menu</a></li>
            <li className='navbar-option'><a href='#book-a-table'>Book A Table</a></li>
            <li className='navbar-option'><a href='#contact-us'>Contact Us</a></li>
        </ul>            
    </nav>
);

export default Navbar;
