import '../styles/index.scss';
import './blocks/block.js';

import * as React from "react";
import * as ReactDOM from "react-dom";

const Index = () => {
  return <div>React is loaded.</div>;
};

ReactDOM.render(<Index />, document.getElementById("index"));
