import React from "react";
import "../styles/HeroSection.css";

function HeroSection() {
    return (
        <div className="hero-container">
            <h1>Hello, I am Junior Web Developer</h1>
            <p>Start to create something new</p>
            <div className="hero-btns">
                <a href="/" className="btn btn-primary">Contact Me</a>
            </div>
        </div>
    );
}

export default HeroSection;
