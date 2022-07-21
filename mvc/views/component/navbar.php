<nav class='nav-bar'>
    <hr class='line'>
    </hr>
    <input type="checkbox" id='check-menu'></input>
    <label for="check-menu" class='menu-btn'><i class="fa-solid fa-angle-down"></i></label>
    <ul class='navbar-link'>
        <li class='navbar-option home'><a href='#home' onClick="document.getElementById('check-menu').checked = false;">Home</a></li>
        <li class='navbar-option'><a href='#about-us' onClick="document.getElementById('check-menu').checked = false;">About Us</a></li>
        <li class='navbar-option'><a href='#menu' onClick="document.getElementById('check-menu').checked = false;">Menu</a></li>
        <li class='navbar-option'><a href='#book-a-table' onClick="document.getElementById('check-menu').checked = false;">Book A Table</a></li>
        <li class='navbar-option'><a href='#contact-us' onClick="document.getElementById('check-menu').checked = false;">Contact Us</a></li>
        <li class='navbar-option'><a href='./admin.php' onClick="document.getElementById('check-menu').checked = false;">Login</a></li>
        <input type="checkbox" id='close-menu'></input>
        <label for="close-menu" class='close-menu-btn' onClick="document.getElementById('check-menu').checked = false;"><i class="fa-solid fa-angle-up"></i></label>
    </ul>
</nav>