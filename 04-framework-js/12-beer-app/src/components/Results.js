import React from 'react';
import Beer from './Beer';

class Results extends React.Component {
    render() {
        return (
            
            <div className="contenu-cards">
                { this.props.beers.map((beer, index) =>
                    <Beer beer={beer} key={index}/>

                /* // <div className="card">
                //     <div className="red"></div>
                //     <h2>name</h2>
                //     <img src="img/glass-1.jpg" alt=""/>
                // </div>

                // <div className="card">
                //     <div className="red"></div>
                //     <h2>Name</h2>
                //     <img src="img/glass-2.jpg" alt=""/>
                // </div>

                // <div className="card">
                //     <div className="red"></div>
                //     <h2>Name</h2>
                //     <img src="img/glass-3.jpg" alt=""/>
                // </div>

                // <div className="card">
                //     <div className="red"></div>
                //     <h2>Name</h2>
                //     <img src="img/glass-4.jpg" alt=""/>
                // </div> */
                )}
                </div>
            
        )
    }
}

export default Results;
