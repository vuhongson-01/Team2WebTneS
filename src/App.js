import React from "react";
import AboutUs from "./container/AboutUs/AboutUs";
import Header from "./container/Header/Header";
import Menu from "./container/Menu/Menu";
import BookATable from "./container/BookATable/BookATable";
import ContactUs from "./container/FindUs/ContactUs";
// import Footer from "./container/Footer/Footer";
import Navbar from './components/Navbar/Navbar';
// import TempHeader from './container/TempHeader/TempHeader';
import './App.css';

function App() {
    return(
        <div>
            <Navbar />
            <Header />
            {/* <TempHeader /> */}
            <AboutUs />
            <Menu />
            <BookATable />
            <ContactUs />
            {/* <Footer />             */}
        </div>
    )   
}

export default App;