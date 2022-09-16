import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import Single from './components/Single';
import Search from './components/Search';
import reportWebVitals from './reportWebVitals';
import { BrowserRouter, Routes, Route, useParams, useNavigate } from 'react-router-dom';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    {/* <Single /> */}
    <BrowserRouter>
      <Routes>
        <Route path="/" index element={<App />} />
        <Route path="/beer/:id/:name" element={<Single />} />
        <Route path="/recherche/:search" element={<Search />} />
      </Routes>
    </BrowserRouter>
  </React.StrictMode>
);

export function withRouter(Component) {
  function ComponentWithRouter(props) {
    let params = useParams();
    let navigate = useNavigate();

    return <Component {...props} router={{ params, navigate }} />;
  }

  return ComponentWithRouter;
}

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
