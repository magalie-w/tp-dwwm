import React from 'react';

class Burger extends React.Component {
    render() {
        return (
            <div className="burger flex">
                <img src={this.props.burger.image} alt={this.props.burger.name} />
                <div className="flex text">
                    <div>
                        <h2>{this.props.burger.name}</h2>
                        <p>{this.props.burger.description}</p>
                        <button className="btn" onClick={this.props.onClick}>Voir</button>
                    </div>
                    <div className="price">{this.props.burger.price} €</div>
                </div>
            </div>
        );
    }
}

export default Burger;
