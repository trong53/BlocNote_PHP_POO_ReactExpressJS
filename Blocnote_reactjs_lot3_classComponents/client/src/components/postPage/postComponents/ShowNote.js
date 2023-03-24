import React, { Component } from "react";
import axios from 'axios';

class ShowNote extends Component
{
    constructor(props) {
        super(props);
        // console.log(props)                      // {id: '22'}
        this.state = {
            title : '',
            description : ''
        }             
    };

    componentDidMount = () => {
        axios.post('/api/noteId', {id: this.props.id})
            .then((response) => {
                // console.log((response.data.data))
                this.setState({
                    title : response.data.data[0].title,
                    description : response.data.data[0].description
                })

            })
            .catch(error => console.log(error));
    };

    render() {
        return (
            <div className="main-postpage">
                <div className="note-title"> {this.state.title} </div>
                <div className="note-description"> {this.state.description} </div>
            </div>
        )
    }
};
export default ShowNote;