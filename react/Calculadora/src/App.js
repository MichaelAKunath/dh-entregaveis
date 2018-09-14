import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

class App extends Component {
  constructor() {
    super();

    this.state = {
      first : 0,
      second : 0
    }
  }

  armazena(event) {
    const valor = event.target.value;
    const nome  = event.target.name;

    this.setState({
      [nome]: valor,
    });
  }

  soma() {
    const resultado = parseInt(this.state.first) + parseInt(this.state.second);

    this.setState({
      resultado
    })
  }
  render() {
      console.log(this.state)
    return (
 <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
        <div>
           <input type='number' name='first' onChange={this.armazena.bind(this)} />
           <input type='number' name='second' onChange={this.armazena.bind(this)} />
           <button onClick={this.soma.bind(this)}>
           Calcular
           </button>
           {
             this.state.resultado && `Olá Michael,o resultado é ${this.state.resultado}`
           }
        </div>
      </div>

    );
  }
}

export default App;
