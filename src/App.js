import React from "react";
import AboutUs from "./container/AboutUs/AboutUs";
import Header from "./container/Header/Header";
import Menu from "./container/Menu/Menu";
import BookATable from "./container/BookATable/BookATable";
import ContactUs from "./container/ContactUs/ContactUs";
import MoveTop from "./components/MoveTop/MoveTop";
import Navbar from './components/Navbar/Navbar';
import LanguageTranslate from "./components/ChangeLanguage/ChangeLanguage";
import LoginForm from "./components/LoginForm/LoginForm";
import './App.css';

function App() {
    return(
        <div>
            <LoginForm/>
            {/* <LanguageTranslate />
            <MoveTop />
            <Navbar />
            <Header />
            <AboutUs />
            <Menu />
            <BookATable />
            <ContactUs /> */}
        </div>
    )   
}

export default App;