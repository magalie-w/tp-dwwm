import React from 'react';
import axios from 'axios';
import Header from './Header.js';
import Results from './Results.js';
import Search from './Search.js';
import Loader from './Loader.js';
import { Link, Outlet } from 'react-router-dom';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      beers: [],
      loading: true,
    }
  }

  componentDidMount() {
    axios.get('https://api.punkapi.com/v2/beers?page=1&per_page=9').then(response => {
      console.log(response.data);
      setTimeout(() => {
        this.setState({ beers: response.data, loading: false });
      },2000);
    });
  }

  render() {
    if (this.state.loading) {
      return <div> <Loader /></div>;
    }

    return (
      <div className="App">
        <div className="container">
        
          <Header />

          <Search />

          <Results beers={this.state.beers} />

          <Link to="/"></Link>
          {/* <Link to="/beer/">Single</Link> */}

          <Outlet />

        </div>
      </div>
    );
          
  }

  // componentDidUpdate() {
    
  // }

}

export default App;
