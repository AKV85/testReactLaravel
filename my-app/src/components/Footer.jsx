import React from "react";
import {FaFacebookF, FaTwitter, FaInstagram, FaGithub, FaLinkedin, FaGitlab, FaEnvelope, FaPhone} from "react-icons/fa";
import "../styles/Footer.css"
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faGithub, faLinkedin, faGitlab } from '@fortawesome/free-brands-svg-icons'



function Footer() {
    return (
        <footer className="footer">
            <div className="footer__column">
                <h4 className="footer__column-title">Portfolio</h4>
                <ul className="footer__list">
                    <li className="footer__list-item"><a href="#">About Me</a></li>
                    <li className="footer__list-item"><a href="#">My Works</a></li>
                    <li className="footer__list-item"><a href="#">Blog</a></li>
                </ul>
            </div>
            <div className="footer__column">
                <h4 className="footer__column-title">Connect</h4>
                <ul className="footer__list">
                    <li className="footer__list-item"><a href="https://github.com/AKV85">  <FaGithub />  </a></li>
                    <li className="footer__list-item"><a href="https://www.linkedin.com/in/andrej-kotov-09664a21b/">  <FaLinkedin/>  </a></li>
                    <li className="footer__list-item"><a href="https://gitlab.com/AKV85">  <FaGitlab />  </a></li>
                    <li className="footer__list-item"><a href="mailto:a.kotov.laknojus@gmail.com">  <FaEnvelope />  </a></li>
                    <li className="footer__list-item"><a href="tel:+37064571501"><FaPhone />  </a></li>
                </ul>
            </div>
            <div className="footer__column">
                <h4 className="footer__column-title">Join Our Newsletter</h4>
                <p>Sign up for our monthly newsletter and get the latest news and updates!</p>
                <form className="footer__form">
                    <input type="email" placeholder="Email address" className="footer__input" />
                    <button type="submit" className="footer__button">Subscribe</button>
                </form>
            </div>
        </footer>
    );
}

export default Footer;
