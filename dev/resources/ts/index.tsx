import React from 'react';
import ReactDOM from 'react-dom';
import { Person } from './test/Person';


const App = () => {
	
  const john = new Person('John', 25);
　const msg = john.greet();
		
  return (
	<div>${msg}</div>
  );
}

ReactDOM.render(<App />, document.getElementById('react_app'));