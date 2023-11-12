// ./resources/ts/index.tsx
import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Demo from './demo/index';
import Richmenu from './richmenu/index';

const App = () => {
    return (
        <Router>
            <Routes>
                <Route path="/demo" element={<Demo />} />
                <Route path="/richmenu" element={<Richmenu />} />
            </Routes>
        </Router>
    );
}

ReactDOM.render(<App />, document.getElementById('root'));
