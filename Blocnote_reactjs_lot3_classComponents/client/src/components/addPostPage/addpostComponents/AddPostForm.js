import React, { Component } from "react";
import { Navigate } from 'react-router-dom';
import axios from 'axios';
import Redirect from "./Redirect";

class AddPostForm extends Component 
{
    constructor() {
        super();
        this.state = {
            note: {
                title: '',
                description: ''
            },
            message: ''
        };
    };

    getValueInput = (e) => {
        let note = { ...this.state.note };
        note[e.target.name] = e.target.value;
        
        this.setState({
            note: note
        })
    };

    handleSubmit = (e) => {
        e.preventDefault();

        axios.post('/api/create', this.state.note)
            .then((response) => {
                // console.log(response.request.status)
                if (response.request.status === 200) {
                    this.setState({
                        message: 'Votre note a été enregistrée avec succès'
                    })
                }
            })
    };

    render() {
        
        return (
            <div className="main-addpage">
                <div className="addnote-title"> Ajouter une note </div>

                <form onSubmit={this.handleSubmit}>

                    <label htmlFor="note-form-title">Titre</label>
                    <input type="text" name="title" id="note-form-title" required onBlur={this.getValueInput} />

                    <label htmlFor="note-form-description">Description</label>
                    <textarea name="description" id="note-form-description" required onBlur={this.getValueInput} ></textarea>

                    <input type="submit" name="note-form-submit" id="note-form-submit" value="Enregistrer" />

                    <div className="addnote-message"> {this.state.message} </div>

                    { this.state.message !=='' ? <Navigate to = "/" /> : ''}

                    {/* { this.state.message !=='' ? <Redirect /> : ''} */}

                </form>
            </div>
        )
    }
};
export default AddPostForm;

