import React from 'react';
import ReactDOM from 'react-dom';
import {
  BrowserRouter as Router,
  Route,
  Switch
} from 'react-router-dom';
import Demo from './demo'; // demo.tsxからのインポート
import { Person } from './test/Person';


const App: React.FC = () => {
  return (
    <Router>
      <Switch>
        <Route path="/demo" component={Demo} />
        {/* 他のルートもこちらに追加可能 */}
      </Switch>
    </Router>
  );
};

export default App;

//const App = () => {
//	
//  const john = new Person('John', 25);
//　const msg = john.greet();
//		console.log('xxx3');//■■■□□□■■■□□□
//  return (
//	<div>${msg}</div>
//  );
//}

//ReactDOM.render(<App />, document.getElementById('react_app'));