import React, { Component } from "react";
import Header from "../Header";
import AddPostForm from "./addpostComponents/AddPostForm";

class AddPostPage extends Component 
{
    render() {
        return (
            <div className="addpost">
                <Header />
                <AddPostForm />
            </div>
        )
    }
};
export default AddPostPage;