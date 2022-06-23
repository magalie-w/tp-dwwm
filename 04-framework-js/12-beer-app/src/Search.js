import React from 'react';
import { Link } from 'react-router-dom';

class Search extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            search: "",
        }
    }

    change = (event) => {
        this.setState({search: event.target.value});
    }

    render() {
        return (
            
            <div className='center'>
                <input type="texte" placeholder="Hoppy, Malt, Angry, New.." value={this.state.search} onChange={(this.change)}/>
                <Link to={"/recherche/" + (this.state.search)}>
                    <button>Recherche</button>
                </Link>
            </div>
            
        )
    }
}

export default Search;