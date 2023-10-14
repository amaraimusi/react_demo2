import React from 'react';
import ReactDOM from 'react-dom';
import {
  BrowserRouter as Router,
  Route,
  Routes
} from 'react-router-dom';

//import '../js/app';
//import 'bootstrap/dist/js/bootstrap.min.js';
//import '../js/bootstrap';
import Demo from './demo';

const App: React.FC = () => {
  return (
    <Router>
      <Routes>
        <Route path="/demo" element={<Demo />} />
        {/* 他のルートもこちらに追加可能 */}
      </Routes>
    </Router>
  );
};

export default App;

ReactDOM.render(<App />, document.getElementById('react_app'));