import React from 'react';
import { Link } from 'react-router-dom';
var slugify = require('slugify');

class Beer extends React.Component {
    render() {
        return (
            <Link to={"/beer/" + this.props.beer.id + "/" + slugify(this.props.beer.name, '-')}>
                <div className="card">
                    <div className="red-card"></div>
                    <h2>{ this.props.beer.name }</h2>
                    <img src={this.props.beer.image_url} alt=""/>
                </div>
            </Link>
        )
    }
}

export default Beer;