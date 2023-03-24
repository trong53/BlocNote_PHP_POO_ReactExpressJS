import React, { Component } from "react";
import {Link} from 'react-router-dom';

class AddPostBtn extends Component
{
    render() {
        return (
            <div className="add-note-btn">
                <Link to="/addpost" className="add-note-btn-link">
                    <div className="add-note-icon">&#43;</div>
                    <div className="add-note-text">Ajouter une note</div>
                </Link>
            </div>
        )
    }
};
export default AddPostBtn;