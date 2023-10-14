import React from 'react';
import ReactDOM from 'react-dom';
import ToggleButton from './cmn/ToggleButton';

const Demo: React.FC = () => {
  return <div>Demo Page!<button type="button" class='btn btn-success'>テスト</button></div>;
};

ReactDOM.render(<ToggleButton targetId="cat_contents" label="コンテンツ1" />, document.getElementById('toggle-button'));


export default Demo;