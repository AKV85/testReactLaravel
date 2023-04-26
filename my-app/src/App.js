import React from 'react';
import UserList from "./components/UserList";
import './App.css';
import ContactForm from "./components/ContactForm";

function App() {
    return (
        <div className="App">
            <UserList/>
            <div>
                <h1>Contact Form</h1>
                <ContactForm/>
            </div>
        </div>
    );
}

export default App;
