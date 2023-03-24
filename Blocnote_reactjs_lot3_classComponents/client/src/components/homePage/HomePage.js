import React, { Component } from "react";
import Header from "../Header";
import AddPostBtn from "./homeComponents/AddPostBtn";
import ShowNotes from "./homeComponents/ShowNotes";

class HomePage extends Component 
{
    render() {
        return (
            <div className="homepage">
                <Header />
                <AddPostBtn />
                <ShowNotes />
            </div>
        )
    }
};
export default HomePage;