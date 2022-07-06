import React from 'react';
import Header from './Header';
import Search from './Search';


function Loader() {
    return <div className="loader">

        <div className="App">
            <div className="container">
                <Header />

                <Search />

                <div className='margin flex center'>
                    <img src="img/ball.svg" alt=""/>
                </div>

                <div className='margin flex center'>
                    <img className="img-beer" src="img/beer.png" alt=""/>
                    <h2>Les bières arrivent !</h2>
                </div>
            </div>
        </div>
    </div>;
}

export default Loader;
