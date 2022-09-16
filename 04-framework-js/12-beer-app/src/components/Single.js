import React from 'react';
import axios from 'axios';
import Header from './Header.js';
import Loader from './Loader.js';
import { withRouter } from '../index';

class Single extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      beers: [],
      loading: true,
    }
  }

  componentDidMount() {
    axios.get('https://api.punkapi.com/v2/beers/' + (this.props.router.params.id)).then(response => {
      console.log(response.data);
      setTimeout(() => {
      this.setState({ beers: response.data[0], loading: false });
      },2000);
    });
  }

  renderIbu(beer) {
    if (!beer.ibu) return;

    let round = Math.ceil(beer.ibu * 5 / 100);

    return (
      <div>
        <h3>Ibu {beer.ibu}</h3>

        <div className='flex'>

        {[1, 2, 3, 4, 5].map(
          function (i) {
            console.log(i,round);
            if (i <= round) {
              return <div className='rond' key={i}></div>;
            }

            return <div className='vide' key={i}></div>;

          }
        )}
    
        </div>  
        {/* 
            <div className='rond'></div>
            <div className='rond'></div>
            <div className='rond'></div>
            <div className='rond'></div>
            <div className='rond'></div>
        </div> */}
      </div>
    );
  }

  render() {
    if (this.state.loading) {
      return <div> <Loader /></div>;
    }

    return (
      <div className="App">
        <div className="container">
        
          <Header />

          <div className="contenu-block">
            <div className="red-block"></div>
              <div className="block">

                <div className='flex around'>
                    <div>
                      <img className="img" src={this.state.beers.image_url} alt=""/>
                        {/* <img src="img/glass-1.jpg" alt="" /> */}
                    </div>

                    <div className='text-beer'>
                      <h2>{ this.state.beers.name }</h2>
                        {/* <h2>Trashy Blonde</h2> */}

                        <p>
                          {this.state.beers.description}
                            {/* Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet sunt cupiditate tempore tempora officiis velit recusandae unde, accusantium deserunt illum quisquam iste animi repellat quam suscipit quae dolorum iure? Soluta. */}
                        </p>
                    </div>
                </div>

                <div className="flex around">
                    <div className='margin'>
                        <div>
                          Alc. <span className='bold'>{this.state.beers.abv}</span> %
                          {/* Alc. 4.1% */}
                        </div>

                        <h3>Food Pairing</h3>
                    
                        <ul>{this.state.beers.food_pairing.map((food, index) =>
                          <li key={index}>{food}</li>)}
                        </ul>

                        {/* <h3>Food Pairing</h3>
                        <ul>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                            <li>Lorem ipsum</li>
                        </ul> */}

                        {this.renderIbu(this.state.beers)}
        
                    </div>

                    <div className='center'>
                        <img src="img/glass-1.jpg" alt="" />
                        <div>EBC {this.state.beers.ebc}</div>
                        {/* <div>EBC 15 (Glass 3)</div> */}
                    </div>

                </div>

                <div className="flex center">
                  <button>Commander</button>
                </div>
            </div>

          </div>
        </div>
      </div>

    );
          
  }
}

export default withRouter(Single);
