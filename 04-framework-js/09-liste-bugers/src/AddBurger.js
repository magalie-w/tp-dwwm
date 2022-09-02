import React from 'react';
import axios from 'axios';

class AddBurger extends React.Component {
    constructor() {
        super();
        this.state = {
            name: "",
            description: "",
            price: 0,
        };
    }

    handleChangeName(event) {
        this.setState({name: event.target.value});
    }

    handleChangeDescription(event) {
        this.setState({description: event.target.value});
    }

    handleChangePrice(event) {
        this.setState({price: event.target.value});
    }

    submitBurger() {
        axios.post('http://localhost:3000/burgers', { name: this.state.name, description: this.state.description, price: this.state.price});

    }

    render() {
        return(
            <form>
                <div>
                    <input type="text" name="name" id="name" value={this.state.name} onChange={(event)=> this.handleChangeName(event)} placeholder='Nom' />
                </div>

                <div>
                    <textarea id="description" name="description" value={this.state.description} onChange={(event)=> this.handleChangeDescription(event)} rows="5" cols="33">
                    </textarea>
                </div>

                <div>
                    <input type="number" name="price" id="price" value={this.state.price} onChange={(event)=> this.handleChangePrice(event)} placeholder='Prix' />
                </div>

                <div>
                    <button onClick={() => this.submitBurger()}>Ajouter</button>
                </div>
            </form>
        )
    }

}

export default AddBurger;