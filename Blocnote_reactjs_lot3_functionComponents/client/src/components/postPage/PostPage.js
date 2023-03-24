import React, { Component } from "react";
import { withRouter } from "./postComponents/withRouter";
import Header from "../Header";
import ShowNote from "./postComponents/ShowNote";

class PostPage extends Component 
{
    constructor(props) {
        super(props);
    };
    
    render() {
        // console.log(this.props.router)
        return (
            <div className="postpage">
                <Header />
                <ShowNote id = {this.props.router.params.id} />
            </div>
        )
    }
};
export default withRouter(PostPage);