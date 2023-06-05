import logo from './logo.svg';
import React, { useState } from 'react';

import './App.css';

function App() {
const [count,setCount] = useState(0);
const [showText,setShowText] = useState(true);

  return (
    <div>
     <h1>{count}</h1>
     <button onClick={() =>{
         setCount(count+1);
         setShowText(!showText);
     }}
     > click here </button>
     {showText && <p>This denotes a even number</p>}
    </div>
  );
};

export default App;
