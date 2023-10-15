import React from 'react';
import ReactDOM from 'react-dom';
import ToggleButton from './cmn/ToggleButton';
import ItemList from './demo/ItemList';
import ItemListAdd from './demo/ItemListAdd';

const Demo: React.FC = () => {
  return <div>Demo Page!<button type="button" class='btn btn-success'>テスト</button></div>;
};

ReactDOM.render(<ToggleButton targetId="cat_contents" label="コンテンツ1" />, document.getElementById('toggle-button'));

ReactDOM.render(<ItemList />, document.getElementById('item_list'));

ReactDOM.render(<ItemListAdd />, document.getElementById('item_list_add'));

export default Demo;