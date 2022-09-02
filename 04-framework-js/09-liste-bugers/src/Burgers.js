import React from 'react';
import axios from 'axios';
import Loader from './Loader';

class Burgers extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            burgers: [
                // { name: "Normal Burger", description: "Un bon burger", image: "https://foodish-api.herokuapp.com/images/burger/burger42.jpg", price: 8 },
                // { name: "King Burger", description: "Un burger de roi", image: "https://foodish-api.herokuapp.com/images/burger/burger19.jpg", price: 10 },
                // { name: "Double Burger", description: "Un burger pour les grandes faims", image: "https://foodish-api.herokuapp.com/images/burger/burger18.jpg", price: 12 },
            ],
            loading: true,
        }
    }

    componentDidMount() {
        axios.get('http://localhost:3000/burgers').then(response => this.setState({ burgers: response.data, loading: false }));
    }

    selectBurger(id) {
        axios.get('http://localhost:3000/burgers/' + id).then(response => this.setState({ burgers: [response.data] }));
        console.log(this.state.burgers);
    }

    render() {
        if (this.state.loading) {
            return <div><Loader /></div>;
        }
        return (
            <div className='flex'>
                <div> {this.state.burgers.map((burger, index) =>
                    <div className='flex bg-white' key={index}>

                        <div className='width'>
                            <img src={burger.image} alt="" width="250px"/>
                        </div>

                        <div>
                            <div className='width'>
                                <h2>{burger.name}</h2>
                                <div>{burger.description}</div>
                            </div>

                            <div className='flex justify'>
                                {this.state.burgers.length == 1 ? <input className='button' type='button' value="Retour" onClick={() => this.componentDidMount()} /> : 
                                <input className="button" type="button" value="Voir" onClick={() => this.selectBurger(burger.id)}/>
                                }
                                <div className='align'>{burger.price} € </div>
                            </div>
                        </div>
                    </div>
                    
                    )}

                </div>
            </div>
        );
    }
}

export default Burgers;