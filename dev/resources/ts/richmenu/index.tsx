import React from 'react';
import Neko from './Neko';
import RichmenuEdit from './RichmenuEdit';
import List from './List';


const Richmenu = () => {
    return (
        <div>
            <h1>Richmenu Page</h1>
           <Neko />
           <RichmenuEdit />
			<List />
        </div>
    );
}

export default Richmenu;