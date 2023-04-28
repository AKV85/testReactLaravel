import React from "react";
import logo from "../images/akvLogos.jpeg";
import "../styles/Header.css"
const Header = () => {
    return (
        <header className="header">
            <div className="logo-container">
                <img src={logo} alt="logo" />
            </div>
            <nav className="nav-menu">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>
    );
};

export default Header;
