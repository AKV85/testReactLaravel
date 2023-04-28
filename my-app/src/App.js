import React from 'react';
// import UserList from "./components/UserList";
import './App.css';
import ContactForm from "./components/ContactForm";
import SocialLinks from "./components/socialLinks/SocialLinks"
import Header from "./components/Header";
import HeroSection from "./components/HeroSection";
import Footer from "./components/Footer";
function App() {
    return (
        <div className="App">
            <Header/>
            <HeroSection/>
            {/*<UserList/>*/}
            <SocialLinks/>
            <div>
                <h1>Contact Form</h1>
                <ContactForm/>
            </div>
            <Footer/>
        </div>
    );
}

export default App;
