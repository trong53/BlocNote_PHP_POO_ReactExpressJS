import React, { Component } from "react";
import { Link } from 'react-router-dom';
import axios from 'axios';

class ShowNotes extends Component
{
    constructor() {
        super();
        this.state = {
            notes : []
        }
    };

    componentDidMount = () => {
        axios.get('/api/getnotes')
            .then((response) => {
                // console.log(response)
                this.setState({
                    notes : response.data.data
                })
            })
            .catch(error => console.log(error));
    };
    
    render() {
        return (
            <div className="notes">
                {this.state.notes.map((note) => {
                    return (
                        <div className="note" key={note.id}>
                            <Link to={`/posts/${note.id}`}> {note.title} </Link>
                        </div>
                    )
                })
                }
            </div>
        )
    }
};
export default ShowNotes;