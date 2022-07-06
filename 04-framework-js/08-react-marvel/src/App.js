import './App.css';
import Marvel from './Marvel';

function App() {
  return (
    <div className="container">
      <Marvel name="Tony Stark" 
              hero="Iron Man" 
              avatar="tony-stark.jpg"
              avatar-hero="iron-man.jpg"/>
    </div>
  );
}

export default App;
