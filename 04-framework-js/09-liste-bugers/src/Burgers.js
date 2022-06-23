import React from 'react';

class Burgers extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            burgers: [
                { name: "Normal Burger", description: "Un bon burger", image: "https://foodish-api.herokuapp.com/images/burger/burger42.jpg", price: 8 },
                { name: "King Burger", description: "Un burger de roi", image: "https://foodish-api.herokuapp.com/images/burger/burger19.jpg", price: 10 },
                { name: "Double Burger", description: "Un burger pour les grandes faims", image: "https://foodish-api.herokuapp.com/images/burger/burger18.jpg", price: 12 },
            ],
        }
    }

    render() {
        return (
            <div className='flex'>
                <div> {this.state.burgers.map((burger, index) =>
                    <div className='flex bg-white' key={index}>

                        <div className='width'>
                            <img src={burger.image} alt="" width="300px"/>
                        </div>

                        <div>
                            <div className='width'>
                                <h2>{burger.name}</h2>
                                <div>{burger.description}</div>
                            </div>

                            <div className='flex justify'>
                                <input className="button" type="button" value="Voir"/>
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