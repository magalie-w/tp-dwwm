import React from 'react';

class Results extends React.Component {
    render() {
        return (
            
            <div> {this.state.beers.map((beer, index) =>
                <div className="contenu-cards" beer={beer} key={beer.id}>
                    <div className="card">
                        <div className="red"></div>
                        <h2>{ this.state.beer.name }</h2>
                    </div>

                {/* // <div className="card">
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
                // </div> */}
            
                </div>
                
                )}
            </div>
        )

    }
}

export default Results;
