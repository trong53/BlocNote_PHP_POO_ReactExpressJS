import React, { Component } from "react";
import {Link} from 'react-router-dom';

class Header extends Component
{
    render() {
        return (
            <header>
                <Link to="/">
                    <img src="./images/logo.png" alt="logo, sitedigital" className="logo" />
                </Link>
                <Link to="/">
                    <div className="site-title">Bloc-Note</div>
                </Link>
            </header>
        )
    }
};
export default Header;